<?php

class Task extends Eloquent {

    protected $table = 'task';
    protected $fillable = array('title','body','status','timestamps');

    public $errors;

    public function isValid($data)
    {
        // set guidelines for data, guard against null values
        $rules = array(

            'title' => 'required|min:3|max:30',
            'body' => 'required|min:5|max:180'
        );

        // make sure the data meets the rules
        $validator = Validator::make($data, $rules);

        // if they do, then allow data to pass
        if ($validator->passes())
        {
            return true;
        }

        // if error - no data passes
        $this->errors = $validator->errors();

        return false;
    }

     public function validAndSave($data)
    {
        // Check for valid data
        if ($this->isValid($data))
        {
            // if valid assign task
            $this->fill($data);
            // Save task
            $this->save();

            return true;
        }

        return false;
    }
}
