<?php

namespace Kordy\Ticketit\Traits;

use TicketitTicket;
use TicketitAgent;
use TicketitAdmin;
use TicketitStatus;
use TicketitPriority;
use TicketitCategory;
use TicketitUser;

trait ModelsFakerOperationsTrait
{


    /**
     * Create user account using faker
     * TODO Make it dynamic or configurable with current user model in Config/models.php
     *
     * @return mixed
     */
    protected function createUser()
    {
        $user_data = [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'password' => bcrypt(str_random(10)),
            'remember_token' => str_random(10)
        ];

        return TicketitUser::create($user_data);
    }

    /**
     * Create agent account using faker
     * TODO Make it dynamic or configurable with current agent model in Config/models.php
     *
     * @return mixed
     */
    protected function createAgent()
    {
        $agent_data = [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => bcrypt(str_random(10))
        ];
        $account = TicketitAgent::create($agent_data);

        // add agent flag to user using addToagents() function in Traits/AgentTrait
        return $account->addToAgents();
    }

    /**
     * Create admin account using faker
     * TODO Make it dynamic or configurable with current admin model in Config/models.php
     *
     * @return mixed
     */
    protected function createAdmin()
    {
        $admin_data = [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => bcrypt(str_random(10))
        ];
        $account = TicketitAdmin::create($admin_data);

        // add admin flag to user using addToadmins() function in Traits/AdminTrait
        return $account->addToAdmins();
    }

    /**
     * Create ticketit status using faker
     *
     * @return mixed
     */
    protected function createStatus()
    {
        return TicketitStatus::create([
            'name' => $this->faker->text(10),
            'color' => $this->faker->hexcolor
        ]);
    }

    /**
     * Create ticketit priority using faker
     *
     * @return mixed
     */
    protected function createPriority()
    {
        return TicketitPriority::create([
            'name' => $this->faker->text(10),
            'color' => $this->faker->hexcolor
        ]);
    }

    /**
     * Create ticketit category using faker
     *
     * @return mixed
     */
    protected function createCategory()
    {
        return TicketitCategory::create([
            'name' => $this->faker->text(10),
            'color' => $this->faker->hexcolor
        ]);
    }

    protected function createTicket($params = [])
    {
        $params['subject'] = isset($params['subject']) ? $params['subject'] : $this->faker->text(30);
        $params['content'] = isset($params['content']) ? $params['content'] : $this->faker->text(200);
        $params['status_id'] = isset($params['status_id']) ? $params['status_id'] : $this->createStatus()->id;
        $params['priority_id'] = isset($params['priority_id']) ? $params['priority_id'] : $this->createPriority()->id;
        $params['category_id'] = isset($params['category_id']) ? $params['category_id'] : $this->createCategory()->id;
        $params['agent_id'] = isset($params['agent_id']) ? $params['agent_id'] : $this->createAgent()->id;
        $user = isset($params['user']) ? $params['user'] : $this->createUser();
        // create ticket using user model morphMany tickets relation
        return $user->ownTickets()->create($params);
    }

    protected function createComment($params = [])
    {
        $params['content'] = isset($params['content']) ? $params['content'] : $this->faker->text(200);
        $params['ticket_id'] = isset($params['ticket_id']) ? $params['ticket_id'] : $this->createTicket()->id;
        $user = isset($params['user']) ? $params['user'] : $this->createUser();
        // create comment using user model morphMany comments relation
        return $user->ticketComments()->create($params);
    }
}