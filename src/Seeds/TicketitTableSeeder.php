<?php
namespace Kordy\Ticketit\Seeds;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TicketitTableSeeder extends Seeder
{

    public $email_domain = '@example.com';
    public $country = 'united states';
    public $agents_qty = 10;
    public $users_qty = 50;
    public $tickets_per_user_min = 5;
    public $tickets_per_user_max = 10;
    public $default_agent_password = 'demo';
    public $default_user_password = 'demo';
    public $tickets_date_period = 300; // days

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // create agents
        $agents_info = $this->randomUser($this->agents_qty);
        $agents_counter = 1;

        foreach ($agents_info as $agent_info) {
            $full_name = $agent_info->name.' '.$agent_info->surname;
            $agent_info = new \App\User();
            $agent_info->name = $full_name;
            $agent_info->email = 'agent'.$agents_counter.$this->email_domain;
            $agent_info->ticketit_agent = 1;
            $agent_info->password = Hash::make($this->default_agent_password);
            $agent_info->save();
            $agents_counter++;
        }

        $statuses = [
            'Pending' => '#e69900',
            'Solved' => '#15a000',
            'Bug' => '#f40700'
        ];

        // create tickets statuses
        foreach ($statuses as $name => $color) {
            $status = \Kordy\Ticketit\Models\Status::create([
                'name' => $name,
                'color' => $color
            ]);
        }

        $categories = [
            'Technical' => '#0014f4',
            'Billing' => '#2b9900',
            'Customer Services' => '#7e0099'
        ];

        $agents = \Kordy\Ticketit\Models\Agent::agentsLists();
        $counter = 0;
        // create tickets statuses
        foreach ($categories as $name => $color) {
            $category = \Kordy\Ticketit\Models\Category::create([
                'name' => $name,
                'color' => $color
            ]);
            $agent = array_rand($agents, 4);
            $category->agents()->attach($agent);
            $counter++;
        }

        $priorities = [
            'Low' => '#069900',
            'Normal' => '#e1d200',
            'Critical' => '#e10000'
        ];

        // create tickets statuses
        foreach ($priorities as $name => $color) {
            $priority = \Kordy\Ticketit\Models\Priority::create([
                'name' => $name,
                'color' => $color
            ]);
        }

        // create users
        $users_info = $this->randomUser($this->users_qty);
        $users_counter = 1;

        foreach ($users_info as $user_info) {
            $full_name = $user_info->name.' '.$user_info->surname;
            $user_info = new \App\User();
            $user_info->name = $full_name;
            $user_info->email = 'user'.$users_counter.$this->email_domain;
            $user_info->ticketit_agent = 0;
            $user_info->password = Hash::make($this->default_user_password);
            $user_info->save();
            $users_counter++;

            $tickets_qty = rand($this->tickets_per_user_min, $this->tickets_per_user_max);

            $random_contents = file('http://loripsum.net/api/'.$tickets_qty.'/long/plaintext', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            foreach ($random_contents as $random_content) {

                $random_title_length = rand(-12, -24);
                $random_title = substr($random_content, $random_title_length);

                $rand_category = rand(1, 3);
                $category = \Kordy\Ticketit\Models\Category::find($rand_category);
                $agents = $category->agents()->lists('name', 'id')->toArray();
                $agent_id = array_rand($agents);

                $rand_status = rand(1, 3);

                $ticket = new \Kordy\Ticketit\Models\Ticket();
                $ticket->subject = $random_title;
                $ticket->content = $random_content;
                $ticket->status_id = $rand_status;
                $ticket->priority_id = rand(1, 3);
                $ticket->user_id = $user_info->id;
                $ticket->agent_id = $agent_id;
                $ticket->category_id = $rand_category;
                $random_create = rand(1,$this->tickets_date_period);
                $ticket->created_at = \Carbon\Carbon::now()->subDays($random_create);
                if($rand_status == 2) {
                    $random_complete = rand(1,10);
                    $created_date = new Carbon($ticket->created_at);
                    $ticket->completed_at = $created_date->addDays($random_complete);
                }
                $ticket->save();
            }
        }

    }

    /**
     * @return string
     */
    public function randomUser($qty)
    {
        $country = urlencode($this->country);
        $random_content_json = file_get_contents('http://api.uinames.com/?country='.$country.'&amount='.$qty);
        return json_decode($random_content_json);
    }
}
