<?php  
class database{   
    protected $conn = "";
    protected $result = "";  
    public function __construct(){ // Kết nối csdl đầu tiên
        $this->conn = mysql_connect(config::HOST,config::USER,config::PASS) 
        or die("Can't connect database");
        mysql_select_db(config::DATA,$this->conn); // Lựa chọn csdl
        mysql_query("SET NAMES utf8"); // Chuyển dữ liệu trả về sang kiểu utf8
    }
    public function query($sql){
        if($this->conn){ // nếu đã kết nối csdl
            $this->result = mysql_query($sql); /* Gán kết quả trả về của câu truy
                                                 vấn cho biến $result */
        }                                
    }
    public function num_rows(){
        if($this->result){ // nếu đã có kết quả trả về từ câu truy vấn
            $rows = mysql_num_rows($this->result);
        }else{
            $rows = 0;
        }
        return $rows; // trả về số dòng tìm được
    }
    public function fetch(){
        if($this->result){ // nếu có kết quả trả về của câu truy vấn
            $data = mysql_fetch_assoc($this->result);
        }else{
            $data = array();
        }
        return $data;
    }
    public function fetchAll(){
		$data = array();
        if($this->result){ // nếu có kết quả trả về của câu truy vấn
            while($db = mysql_fetch_assoc($this->result)){
                $data[] = $db; 
            }
        }
        return $data;
    }
}
?>