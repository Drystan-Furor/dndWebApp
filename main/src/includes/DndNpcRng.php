<?php

/**
 * Overwatch
 * the final class 
 * takes all information from all generators and
 * makes a string concat
 * Goal of this Class is to call all other classes
 * Assign those classes to properties and
 * use THAT->getter to assign the value to THIS Classes property
 * 
 * If we build mult properties we have to Get them seperatly out of that class
 * 
 */
class DndNpcRng
{
    /**
     * Call Overwatch.
     * The function that calls all other classes and methods
     * finally creating a full RNG piece of text.
     */
    public function __construct()
    {
        $this->new_rng_npc = self::_dndRngNpc();
        $this->string = self::_writeStory();
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getNewNpc()
    {
        return $this->new_npc;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getString()
    {
        return $this->string;
    }


    /**
     * Method to call all classes and use or acces properties
     * 
     * @return string
     */
    private function _dndRngNpc()
    {
        // gender race age
        // OBJECT == new Class
        //property is Class, not value of class, not a return function
        // THIS OBJECT == class->get Object Value of THAT Class

        //class
        $this->npcClass = new NpcClass();
        $this->npcClass = $this->npcClass->getNpcClass();
        $this->class = $this->npcClass;

        //--- nouns
        $this->new_npc = new Gender();
        $this->manWoman = $this->new_npc->getManWoman();
        $this->heshe = $this->new_npc->getHeShe();
        $this->hisher = $this->new_npc->getHisHer();
        $this->gender = $this->new_npc->getGender();

        //--- here it gets exciting
        $this->race = new Race();
        $this->raceorigin = $this->race->getRaceorigin();
        $this->raceArray = $this->race->getRaceArray(); //passed drow check
        $this->dndrace = $this->race->getRace();

        $this->age = new Age($this->dndrace);
        $this->age = $this->age->getAge();

        //face
        $this->face = new ProfileGenerator(
            $this->dndrace,
            $this->new_npc,
            $this->npcClass
        );
        $this->face = $this->face->getFace();

        //name [requires a race]
        //$this->name = new Name(); the constructor requires 4 values 
        // -> explore to make users enter their own name.
        //pass object to class method, allows to pass multiple properties
        // pass race to Name so it can sort what race naming class should be calles
        $this->name = new Name($this->race, $this->new_npc, $this->raceArray);
        $this->firstname = $this->name->getFirstname();
        $this->lastname = $this->name->getLastname();
        $this->nickname = $this->name->getNickname();
        $this->description = $this->name->getDescription();
        $this->dndrace = $this->race->getRace();


        //body {also public method}
        $this->body = new BodiesGenerator($this->dndrace, $this->new_npc);
        //---body
        $this->size = $this->body->getBodySize();
        $this->body = $this->body->getBody();




        //Mood == Sentence
        $this->mood = new MoodGenerator($this->npcClass);
        $this->mood = $this->mood->getMood();

        //scars 
        $this->scar = new ScarsGenerator($this->new_npc);
        $this->scar1 = $this->scar->getScar();
        $this->scar = new ScarsGenerator($this->new_npc);
        $this->scar2 = $this->scar->getScar();
        $this->scar = new ScarsGenerator($this->new_npc);
        $this->scar3 = $this->scar->getScar();

        //npc_wardrobe-by-wealth +npc_wardrobe
        $this->outfit = new ProsperityGenerator($this->heshe, $this->class, $this->dndrace);
        $this->intro = $this->outfit->getIntro();
        $this->outfit = $this->outfit->getOutfit();

        // this->weapon == full sentence
        $this->weapon = new WeaponsGenerator($this->dndrace);
        $this->weapon = $this->weapon->getArms();

        //this string
    }

    //-------------------------------------------------------subject array
    /**
     * Build an array with the subject
     * approach subject with diff nouns
     * 
     * @return string
     */
    private function _subjectArray()
    {
        $randsubject = [
            " the  " . $this->dndrace . "",
            " this " . $this->gender,
            $this->heshe,
            $this->nickname,
        ];
        $subject = array_rand(array_flip($randsubject), 1);
        return $subject;
    }


    /**
    String Concat and Results Printer
     */
    //ultimate string concat
    /**
     * Write the story
     * Concat all
     * 
     * @return string
     */
    private function _writeStory()
    {
        var_dump($this->dndrace);
        //BioName
        $string =  "You meet " . $this->firstname . " " . $this->lastname . ". ";
        // {generrateee npc, getRace call script get name}
        // return from scriptcaller race
        //BioGenderRaceAge
        //--BODY GENDER AGE WEALTH DIVERGENCE
        /*
        A medium sized female Drow Druid thats about 46 years old, who looks priviliged.
        {bodysize}   {noun}{race}{class}          {age}           {prosperity intro}
        */
        $string .= "A " . $this->size . " " .
            $this->gender . " " .
            $this->dndrace  . " " . $this->npcClass
            . " thats about " . $this->age . " years old, " .
            $this->intro . ". " .
            $this->description . " " .
            //-----------------------------facial construction
            /* You SEE this MAN has NOSE. 
            The RACE meets your gaze with EYES
            As you seize up the MAN you SEE HE has CHIN
            and HIS mouth is set with MOUTH.
            */
            $this->face . ". " .

            //------------------------------see scars
            $this->scar1 . 
            $this->scar2 . 
            $this->scar3 . 

            //------------------------------see body
            $this->body . ". " .
            //------------------------------see outfit
            $this->outfit . 
            //------------------------------see mood
            $this->mood . " " .
            //------------------------------see weapon
            $this->weapon . ". " . PHP_EOL;

        return $string;
        //----------------------------------- print results
        //echo $string;
    }
}
//---create object
// $new_npc = new DndNpcRng();



/*
 counter of website visits
 counter of ## rng's created 
 foolproof form ??

 beards??? array, random, assign to dwarves. perhaps others?
 or beard / chin, if not beard chin = ""; otherwise NO chin but beard.
 */
