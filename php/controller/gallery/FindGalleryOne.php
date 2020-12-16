<?php
namespace Php\Controller\Gallery;
include "../../../php/model/Gallery.php";
use Php\Model\Gallery;
class FindGalleryOne{
    private $model;
    public function __construct()
    {
        $this->model=new Gallery();
    }
    /*
     * 获取所有的校园大厅里面的信息
     * 请求：
     * 响应：数组
     * */
    public function run($id){
        $res=$this->model->findOne($id);
        $flag=0;
        $data=null;
        if ($res->num_rows>0){
            while ($row=$res->fetch_assoc()){
                $data[$flag]=array(
                    'id'=>$row['id'],                   //id
                    'info'=>$row['info'],               //详细信息
                    'classId'=>$row['class_id'],        //类别id
                    'generall'=>$row['generall'],       //大致信息
                    'createTime'=>$row['create_time'],  //创建时间
                    'img'=>$row['mg'],                  //图片
                    'title'=>$row['title'],             //标题
                );
                $flag++;
            }
        }
        return $data;
    }
}