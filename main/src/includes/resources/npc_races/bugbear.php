<?php
/** 
 *   Bugbear names are guttural and range from short to long.  
 *   Unfortunately there are no known female bugbear names. 
 *   Since bugbears speak Goblin (and Common), 
 *   you could use goblin names as well for more inspiration.
 *
 */
class bugbear extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace    string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $this->lastname = self::_lastname();
        $this->firstname = self::_firstname($new_npc);
        $this->nickname = $this->lastname;
        $this->description = self::_description($dndrace, $new_npc);
    }
    
    /**
     * Array
     * 
     * @return string
     */
    private function _lastname()
    {
        $surnames = [
            'Khitran', 'Ghugrir', 'Vadumkk', 'Brimkk', 'Tudrolk', 'Rograth',
            'Rordonn', 'Vith', 'Chrilk', 'Tharr', 'Ghogran', 'Stamkk', 'Zhonn',
            'Ghurdolk', 'Stun', 'Hrodoth', 'Zirk', 'Stath', 'Bromkk', 'Rizzon',
        ];
        $lastname = array_rand(array_flip($surnames), 1);
        $this->lastname = $lastname;
        return $lastname;
    }
    
    /**
     * Array
     * 
     * @return string
     */
    private function _firstname($new_npc)
    {
        $firstname = "";
        if ($new_npc->getGender() == 'male') {
            $malenames = [
                'Driekol', 'Greerkilx', 'Brabtygz', 'Glevzaagz', 'Lognerk', 'Xasb',
                'Jykeegs', 'Craang', 'Krart', 'Xat', 'Oz', 'Creld', 'Sriogz', 'Fiolx',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }
        
        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Kuqi', 'Enxa', 'Flihisz', 'Depolm', 'Nunoilee', 'Noxea', 'Frez',
                'Qeassa', 'Olk', 'Eagansa', 'Srokkaax', 'Gralbianq', 'Hoq',
                'Gnaalsia', 'Pryhxa',
            ];
            $firstname = array_rand(array_flip($femalenames), 1);
        }
        $this->firstname = $firstname;
        return $firstname;
    }
    
    
    /**
     * Array
     * 
     * @return string
     */
    private function _nickname()
    {
        $nickname = $this->lastname;
        $this->nickname = $nickname;
        return $nickname;
    }
    
    /**
     * Array
     * 
     * @param $dndrace this race 
     * @param $new_npc nouns
     * 
     * @return string
     */
    private function _description($dndrace, $new_npc)
    {
        $description = $dndrace->getRace() . "s are hairy goblinoids
         born for battle and mayhem. 
        They survive by raiding and hunting, but are fond of setting ambushes 
        and fleeing when outmatched.";
    
        return $description;
    }
       
}  