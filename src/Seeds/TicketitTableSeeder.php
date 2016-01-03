<?php
namespace Kordy\Ticketit\Seeds;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TicketitTableSeeder extends Seeder
{

    public $email_domain = '@example.com';
    public $agents_qty = 5;
    public $users_qty = 30;
    public $tickets_per_user_min = 1;
    public $tickets_per_user_max = 5;
    public $comments_per_ticket_min = 0;
    public $comments_per_ticket_max = 3;
    public $default_agent_password = 'demo';
    public $default_user_password = 'demo';
    public $tickets_date_period = 270; // days
    public $tickets_open = 20; // To-do
    public $tickets_min_close_period = 3; // days
    public $tickets_max_close_period = 5; // days
    public $default_status_id = 2;
    public $categories = [
        'Technical' => '#0014f4',
        'Billing' => '#2b9900',
        'Customer Services' => '#7e0099'
    ];
    public $statuses = [
        'Pending' => '#e69900',
        'Solved' => '#15a000',
        'Bug' => '#f40700'
    ];
    public $priorities = [
        'Low' => '#069900',
        'Normal' => '#e1d200',
        'Critical' => '#e10000'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $faker = \Faker\Factory::create();

        // create agents
        $agents_counter = 1;

        for ($a = 1; $a <= $this->agents_qty; $a++) {
            $agent_info = new \App\User();
            $agent_info->name = $faker->name;
            $agent_info->email = 'agent'.$agents_counter.$this->email_domain;
            $agent_info->ticketit_agent = 1;
            $agent_info->password = Hash::make($this->default_agent_password);
            $agent_info->save();
            $agents_counter++;
        }

        // create tickets statuses
        foreach ($this->statuses as $name => $color) {
            $status = \Kordy\Ticketit\Models\Status::create([
                'name' => $name,
                'color' => $color
            ]);
        }

        $agents = \Kordy\Ticketit\Models\Agent::agentsLists();
        $counter = 0;
        // create tickets statuses
        foreach ($this->categories as $name => $color) {
            $category = \Kordy\Ticketit\Models\Category::create([
                'name' => $name,
                'color' => $color
            ]);
            $agent = array_rand($agents, 4);
            $category->agents()->attach($agent);
            $counter++;
        }

        // create tickets statuses
        foreach ($this->priorities as $name => $color) {
            $priority = \Kordy\Ticketit\Models\Priority::create([
                'name' => $name,
                'color' => $color
            ]);
        }
        $categories_qty = \Kordy\Ticketit\Models\Category::count();
        $priorities_qty = \Kordy\Ticketit\Models\Priority::count();
        $statuses_qty = \Kordy\Ticketit\Models\Status::count();

        // create users
        $users_counter = 1;

        for ($u = 1; $u <= $this->users_qty; $u++) {
            $user_info = new \App\User();
            $user_info->name = $faker->name;
            $user_info->email = 'user'.$users_counter.$this->email_domain;
            $user_info->ticketit_agent = 0;
            $user_info->password = Hash::make($this->default_user_password);
            $user_info->save();
            $users_counter++;

            $tickets_qty = rand($this->tickets_per_user_min, $this->tickets_per_user_max);

            for ($t = 1; $t <= $tickets_qty; $t++) {

                $rand_category = rand(1, $categories_qty);
                $priority_id = rand(1, $priorities_qty);
                do {
                    $rand_status = rand(1, $statuses_qty);
                } while($rand_status == $this->default_status_id);

                $category = \Kordy\Ticketit\Models\Category::find($rand_category);
                $agents = $category->agents()->lists('name', 'id')->toArray();
                $agent_id = array_rand($agents);
                $random_create = rand(1,$this->tickets_date_period);

                $random_complete = rand($this->tickets_min_close_period,
                                        $this->tickets_max_close_period);

                $ticket = new \Kordy\Ticketit\Models\Ticket();
                $ticket->subject = $faker->text(50);
                $ticket->content = $faker->paragraph($nbSentences = 10);
                $ticket->status_id = $rand_status;
                $ticket->priority_id = $priority_id;
                $ticket->user_id = $user_info->id;
                $ticket->agent_id = $agent_id;
                $ticket->category_id = $rand_category;
                $ticket->created_at = \Carbon\Carbon::now()->subDays($random_create);
                $ticket->updated_at = \Carbon\Carbon::now()->subDays($random_create);

                $completed_at = new Carbon($ticket->created_at);

                if(!$completed_at->addDays($random_complete)->gt(\Carbon\Carbon::now())) {
                    $ticket->completed_at = $completed_at;
                    $ticket->updated_at = $completed_at;
                    $ticket->status_id = $this->default_status_id;
                }
                $ticket->save();

                $comments_qty = rand($this->comments_per_ticket_min,
                                    $this->comments_per_ticket_max);

                for ($c=1; $c <= $comments_qty ; $c++) {
                    if (is_null($ticket->completed_at)) {
                        $random_comment_date = $faker->dateTimeBetween(
                        '-'.$random_create.' days', 'now');
                    }
                    else {
                        $random_comment_date = $faker->dateTimeBetween(
                        '-'.$random_create.' days', '-'.($random_create - $random_complete).' days');
                    }


                    $comment = new \Kordy\Ticketit\Models\Comment;
                    $comment->ticket_id = $ticket->id;
                    $comment->content = $faker->paragraph($nbSentences = 10);

                    if($c % 2 == 0) {
                        $comment->user_id = $ticket->user_id;
                    }
                    else {
                        $comment->user_id = $ticket->agent_id;
                    }
                    $comment->created_at = $random_comment_date;
                    $comment->updated_at = $random_comment_date;
                    $comment->save();
                }
                $last_comment = $ticket->Comments->sortByDesc('created_at')->first();
                $ticket->updated_at = $last_comment['created_at'];
                $ticket->save();

            }
        }

    }
}
