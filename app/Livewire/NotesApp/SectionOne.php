<?php

namespace App\Livewire\NotesApp;

use App\Models\Note;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SectionOne extends Component
{

    #[Validate('required|min:3')]
    public $title = '';
    #[Validate('required|min:3')]
    public $body = '';
    #[Validate('required|date')]
    public $send_date = '';
    #[Validate('required')]
    public $send_time = '';
    #[Validate('required|email')]
    public $recipient = '';
    #[Validate('boolean')]
    public $is_published = false;

    public $notes = [];
    public $is_updating = false;

    public function mount()
    {
        $this->send_date = now()->format('Y-m-d');
        $this->send_time = now()->format('H:i');
        $this->notes = auth()->user()->notes;
    }

    public function save()
    {

        $this->validate();

        $note = new Note();
        $note->user_id = auth()->id();
        $note->title = $this->title;
        $note->body = $this->body;
        $note->send_date = $this->send_date;
        $note->send_time = $this->send_time;
        $note->recipient = $this->recipient;
        $note->is_published = $this->is_published;
        $note->save();

        $this->reset();
        $this->mount();
    }

    public function set_update(Note $note)
    {
        $this->is_updating = true;
        $this->title = $note->title;
        $this->body = $note->body;
        $this->send_date = Carbon::parse($note->send_date)->format('Y-m-d');
        $this->send_time = Carbon::parse($note->send_time)->format('H:i');
        $this->recipient = $note->recipient;
        $this->is_published = $note->is_published;
    }

    public function update(Note $note)
    {
        $this->authorize('update', $note);
        $this->validate();

        $note->title = $this->title;
        $note->body = $this->body;
        $note->send_date = $this->send_date;
        $note->send_time = $this->send_time;
        $note->recipient = $this->recipient;
        $note->is_published = $this->is_published;
        $note->update();

        $this->reset();
        $this->mount();
    }

    public function delete(Note $note)
    {
        $this->authorize('delete', $note);
        $note->delete();
        $this->mount();
    }

    public function render()
    {
        return view('livewire.notes-app.section-one');
    }
}
