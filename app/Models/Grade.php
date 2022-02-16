<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    /**
     * Update the current grade with the new grade if applicable
     * Grade will only be updated when it is higher than the previous grade (best result counts)
     *
     * @param $grade double The new grade
     */
    public function addResult($grade)
    {
        /**
         * Refresh the current Grade to load the default values from the database
         */
        $this->refresh();

        /**
         * Highest counts, so if the new grade is lower or equal, don't update anything
         */
        if($this->best_grade >= $grade) {
            return;
        }

        /**
         * We know the new result is better, so store it
         */
        $this->best_grade = $grade;

        /**
         * If the result was higher than or equal to the passing threshold, the test is passed at this moment
         */
        if($this->best_grade >= $this->lowest_passing_grade) {
            $this->passed_at = now();
        }

        /**
         * Store the changes
         */
        $this->save();
    }
}
