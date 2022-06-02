<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Group;

class Groups extends Component
{
    public $groups, $name, $section, $year, $course, $group_id;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->posts = Group::all();
        return view('livewire.groups');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->name = '';
        $this->section = '';
        $this->year = '';
        $this->course = '';
        $this->group_id = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'section' => 'required',
            'year' => 'required',
            'course' => 'required',
        ]);

        Post::updateOrCreate(['id' => $this->group_id], [
            'name' => $this->name,
            'section' => $this->section,
            'year' => $this->year,
            'course' => $this->course
        ]);

        session()->flash('message',
            $this->group_id ? 'Group Updated Successfully.' : 'Post Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $group = Group::findOrFail($id);
        $this->group_id = $id;
        $this->name = $group->title;
        $this->section = $group->section;
        $this->year = $group->year;
        $this->course = $group->course;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Group::find($id)->delete();
        session()->flash('message', 'Group Deleted Successfully.');
    }
}
