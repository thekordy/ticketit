<?php
namespace Kordy\Ticketit\Seeds;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TicketitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $email_domain = '@example.com';

        // create agents
        for ($x = 1; $x <= 3; $x++) {
            $user_info = $this->randomUser();
            $user_email = 'agent'.$x.$email_domain;
            $user = new \App\User();
            $user->name = ucfirst($user_info['first']).' '.ucfirst($user_info['last']);
            $user->email = $user_email;
            $user->ticketit_agent = 1;
            $user->password = Hash::make('123321');
            $user->save();
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
            $agent = array_slice($agents, $counter, 1, true);
            $category->agents()->attach(key($agent));
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
        for ($x = 1; $x <= 3; $x++) {
            $user_info = $this->randomUser();
            $user_email = 'user'.$x.$email_domain;
            $user = new \App\User();
            $user->name = ucfirst($user_info['first']).' '.ucfirst($user_info['last']);
            $user->email = $user_email;
            $user->password = Hash::make('123321');
            $user->save();

            for ($x = 0; $x <= 10; $x++) {

                $random_title_json = file_get_contents('http://www.randomtext.me/api/gibberish/h1/3-6');
                $random_title_json = json_decode($random_title_json);

                $random_content_json = file_get_contents('http://www.randomtext.me/api/gibberish/p-2/35-75');
                $random_content_json = json_decode($random_content_json);

                $rand_category = rand(1, 3);
                $category = \Kordy\Ticketit\Models\Category::find($rand_category);
                $agent = $category->agents()->first();

                $ticket = new \Kordy\Ticketit\Models\Ticket();
                $ticket->subject = strip_tags($random_title_json->text_out);
                $ticket->content = $random_content_json->text_out;
                $ticket->status_id = rand(1, 3);
                $ticket->priority_id = rand(1, 3);
                $ticket->user_id = $user->id;
                $ticket->agent_id = $agent->id;
                $ticket->category_id = $rand_category;
                if($rand_category = 2) $ticket->completed_at = \Carbon\Carbon::now();
                $ticket->save();
            }
        }

    }

    /**
     * @return string
     */
    public function randomUser()
    {
        $random_content_json = file_get_contents('https://randomuser.me/api/');
        $random_content_djson = json_decode($random_content_json);
        $user['first'] = $random_content_djson->results[0]->user->name->first;
        $user['last'] = $random_content_djson->results[0]->user->name->last;
        $user['email'] = $random_content_djson->results[0]->user->email;
        return $user;
    }
}
