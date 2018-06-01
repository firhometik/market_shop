<?php
namespace app\bis\controller;
use think\Controller;
use think\Request;
use app\admin\model\User;
class Register extends Controller
{
	public function index(){
		$category = model('Category') -> getCategoryParent();
		$city = model('City') ->getCityParent();
		return $this -> fetch('',[
			'category' => $category,
			'city' 	   => $city,
			]);
	}
	public function add(){
		if (Request::instance()->isPost()) {
			$this -> error('请求错误');
		}
			$data = input('post.');
			dump($data);die;
			//校检数据
			$validate = validate('Bis');
			if (!$validate->scene('add')->check($data)) {
				$this -> error($validate->getError());
			}
			//总店相关信息
			$data['city'] = '';
			if (!empty($data['th_city_id'])) {
				$data['city'] = $data['city_id'].','.$data['se_city_id'].','.$data['th_city_id'];
			}elseif (!empty($data['se_city_id'])) {
				$data['city'] = $data['city_id'].','.$data['se_city_id'];
			}else{
				$data['city'] = $data['city_id'];
			}
			$bisData = [
				'name'=>$data['name'],
				'city_id'=>$data['city_id'],
				'city_path'=>$data['city'],
				'se_city_id'=>$data['se_city_id'],
				'logo'=>$data['logo'],
				'licence_logo'=>$data['licence_logo'],
				'bank_info'=>$data['bank_info'],
				'bank_name'=>$data['bank_name'],
				'bank_user'=>$data['bank_user'],
				'faren'=>$data['faren'],
				'faren_tel'=>$data['faren_tel'],
				'email'=>$data['email'],
				'description'=>empty($data['description'])?'':$data['description'],
			];
			$bisId = model('Bis')->add($bisData);
			//总店相关信息入库
			$data['cat'] = '';
			if (!empty($data['se_category_id'])) {
				$data['cat'] = implode('|',$data['se_category_id']);
			}
			$loactionData = [
				'bis_id'=>$bisId,
				'name'=>$data['name'],
				'tel'=>$data['tel'],
				'contact'=>$data['contact'],
				'category_id'=>$data['category_id'],
				'category_path'=>$data['category_id'].','.$data['cat'],
				'city_id'=>$data['city_id'],
				'city_path'=>$data['city'],
				'open_time'=>$data['open_time'],
				'content'=>empty($data['content'])?'':$data['content'],
				'is_main'=>1,//代表总店信息
				'xpoind'=>empty($lanlat['result']['loaction']['lng'])?'':$lanlat['result']['loaction']['lng'],
				'ypoind'=>empty($lanlat['result']['loaction']['lat'])?'':$lanlat['result']['loaction']['lat'],
			];
			$loactionId = model('BisLocation')->add($loactionData);
			//账户相关信息校检
			$data['code'] = mt_rand(100,10000);
			$accountData = [
				'bis_id' =>$bisId,
				'username'=>$data['username'],
				'code'=>$data['code'],
				'password'=>md5($data['password'].$data['code']),
				'is_main'=>1,
			];
			$accountId = model('BisAccount')->add($accountData);	
			if (!accountId && $bisId && $loactionId) {
				$this -> error('申请失败');
			}		
			//发送邮件
			$url = request()->domain().url('register/waiting',['id'=>$bisId]);
			$title = 'o2o_shop申请入住通知';
			$content = '您提交的入驻申请需等待平台审核，您可以通过点击链接<a href="'.$url.'" target="_blank">查看链接</a>了解审核状态';
			// \PHPMailer\email::send($data['email'],$title,$content);
			$this -> success('申请成功');

	}
	public function waiting(){
		echo "test";
	}
}