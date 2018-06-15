<?php 
//百度地图相关业务封装
class Map{
	public static function  getLangLat($query,$region){
		//http://api.map.baidu.com/geocoder/v2/?address=北京市海淀区上地十街10号&output=json&ak=TC9hrZ98c2abnhQAEbHyNEAaFXiNpkRk&callback=showLocation //GET请求
		//http://api.map.baidu.com/place/v2/search?query=ATM机&tag=银行&region=北京&output=json&ak=您的ak //GET请求
		if (!$adress) {
			return '';
		}
		$data = [
			// 'address' => $adress,
			'query' => $query,
			'region' => $region,
			'output' => 'json',
			'ak'  => config('map.ak'),
		];
		$url =config('map.baidu_map_url').config('map.getcoder').'?'.http_build_query($data);
		//1、file_get_contents()
		//2、curl
		$re = doCurl($url);
		return $re;
	}
	//http://api.map.baidu.com/staticimage/v2
	//根据经纬度或者地址来获取百度地图
	public static function staticimage($center){
		if (!$center) {
			return '';
		}
		$data = [
			'ak'  => config('map.ak'),
			'width' => config('map.width'),
			'height' => config('map.height'),
			'center' => $center,
			'markers' =>$center,
			'scale'  => 2,
		];
		$url =config('map.baidu_map_url').config('map.staticimage').'?'.http_build_query($data);
		//1、file_get_contents()
		//2、curl
		$re = doCurl($url);
		return $re;
	}
}
