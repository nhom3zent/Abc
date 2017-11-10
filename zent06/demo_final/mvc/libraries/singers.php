<?php
class singers extends database{
	protected $_table = "users";
	protected $_album = "tbl_albums";
	protected $_songs = "tbl_songs";
	public function listsingers(){
		$sql = "select * from $this->_table";
		$this->query($sql);
		return $this->fetchAll();
	}
	public function getsinger($singerid){
       $sql = "select * from $this->_table where singer_id = '$singerid'";
       $this->query($sql);
       return $this->fetch();  
    }
    
    public function getalbums($singerid){ 
       $sql = "select * from $this->_album where singer_id ='$singerid'";
       $this->query($sql);
       return $this->fetchAll();
    }
	public function albuminfo($albumid){
       $sql = "select * from $this->_album where album_id = '$albumid'";
       $this->query($sql);
       return $this->fetch();  
    }
    
    public function getsongs($albumid){ 
       $sql = "select * from $this->_songs where album_id ='$albumid'";
       $this->query($sql);
       return $this->fetchAll();
    }
	public function playsong($songid){
		$sql = "select * from $this->_songs where song_id = '$songid'";
       $this->query($sql);
       return $this->fetch(); 
	}
}