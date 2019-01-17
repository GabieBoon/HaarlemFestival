    <?php

    class ContentModel extends ModelBase
    {
        //this doesnt work xD
        // protected $_id,
        //     $_event,
        //     $_section,
        //     $_content,
        //     $_language;

        public function __construct()
        {
            parent::__construct();
        }


        public function getRawContent(string $event, string $section = '')
        {


            $sql = "SELECT * FROM Content WHERE event = ?";

            return $this->query($sql, [$event])->getResult();
        }


        public function getContent(string $event, string $section = '')
        {
            return $this->getRawContent($event, $section);

            // $sql = "SELECT * FROM Content WHERE event = ?";

            // return $this->query($sql, [$event])->getResult();
        }

        public function getAllSectionNames(string $event)
        {
            $sql = "select * from Venue where event like ?";

            return $this->query($sql, [$event])->getResult();
        }



        public function storeContentPerSection(Type $var = null)
        {
            
        }
    }