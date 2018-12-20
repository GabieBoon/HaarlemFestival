<table><?= $this->table->generateTable(27,10,21, "" , true, true) ?> </table>
<table><?= $this->table->generateTable(27,10,21, "Dance", false, true, $this->danceLocations, $this->danceTickets) ?> </table>
<table><?= $this->table->generateTable(27,10,21, "Jazz", false, true, $this->jazzLocations, $this->jazzTickets) ?> </table>
<table><?= $this->table->generateTable(27,10,21, "Food", false, true, $this->restaurants, $this->foodTickets) ?> </table>
<table><?= $this->table->generateTable(27,10,21, "Historic", false, true,$this->languages, $this->historicTickets) ?> </table>