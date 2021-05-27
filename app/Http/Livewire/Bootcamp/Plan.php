<?php

namespace App\Http\Livewire\Bootcamp;

use Livewire\Component;

class Plan extends Component
{
    private $plans = [
        'basic' => [
            'icon' => 'plan-2',
            'title' => 'Intermediate',
            'subtitle' => 'Wanna design websites?',
            'amount' => 16000,
            'original_amount' => 20000,
            'duration' => 'Two(2) Weeks',
            'benefits' => ['Website Design', 'HTML5', 'CSS3', 'Javascript', 'Website Deployment', '2 Projects']
        ],
        'advanced' => [
            'icon' => 'plan-3',
            'title' => 'Advanced',
            'subtitle' => 'Badass Web developer?',
            'amount' => 24000,
            'original_amount' => 30000,
            'duration' => 'Four(4) Weeks',
            'benefits' => ['All Basic Packages + ', 'Web development', 'Backend (PHP)', 'Database (MySQL)', 'Github', 'SSH', '3+ Projects']
        ],
    ];

    public $plan;
    public $name;
    public $amount;
    public $prefered;

    public function mount()
    {
        $this->plan = collect($this->plans[$this->name]);
        $this->amount = number_format($this->plan['amount']);
        $this->prefered = $this->name == 'advanced';
    }

    public function render()
    {
        return view('livewire.bootcamp.plan');
    }

}
