<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use Livewire\WithPagination;

use App\Models\Ucapan;

class AddUcapan extends Component
{
    //use WithPagination;

    public $hasMore = false;
    public $currentPage = 0;
    public $perPage = 3;

    //loadMoreprotected $listeners = ['loadMoreData'];



    public $name = "anonimous";
    public $pesan = "pesan";
    public $isLoading = false;


    protected $rules = [
        'pesan' => 'required',
    ];



    public function mount($page = 0)
    {
        $this->currentPage = $page;
    }





    public function render()
    {

        $ucapans = Ucapan::latest()->offset($this->currentPage * $this->perPage)->limit($this->perPage)->get();
        $total = Ucapan::count();
        if (count($ucapans) == $total) {
            $this->hasMore = false;
        } else {
            $this->hasMore = true;
        }
        //$this->currentPage = $this->currentPage + 1;
        return view('livewire.add-ucapan', ['ucapans' => $ucapans]);
    }

    public function addUcapan()
    {
        $this->validate();

        Ucapan::create([
            'name' => $this->name,
            'ucapan' => $this->pesan,
            'status' => 1
        ]);
    }

    public function loadMore()
    {
        //$this->currentPage =  $this->currentPage + 1;

        $this->perPage = $this->perPage + 3;
    }
}
