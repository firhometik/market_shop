window.onload = function() {
		var allData = null;
		ajax('GET', CSS_URL+"/allCity.json", null, function(data) {
			allData = JSON.parse(data);
			loadProvince(); //调用，加载省份

		});
		//写一个函数用于加载第一个select的所有省份
		function loadProvince() {
			var provs = allData.regions;
			//获取第一个select框
			var sele1 = document.getElementById('provSel');
			sele1.innerHTML = "<option>省</option>"
			for(var i = 0; i < provs.length; i++) {
				//每个省份都是一个对象，对象名称的name属性就是每个省份的名称
				var provName = provs[i].name;
				//创建option标签
				var opt = document.createElement('option');
				opt.innerHTML = provName;
				//把option标签放入select框中去
				sele1.appendChild(opt);
			}

			//给第一个框添加onchange事件，在其中内容（选项）发生改变时触发
			sele1.onchange = function() {
				loadCity(this.value);
			}
		}
		//写一个函数用于加载第二个select所有地市
		function loadCity(prov) {
			var provs = allData.regions;
			//获取第一个select框
			var sele2 = document.getElementById('citySel');
			for(var i = 0; i < provs.length; i++) {
				//获取省份名
				var provName = provs[i].name;
				//获取要加载地市的省份，加载出地市
				if(provName == prov) {
					//获取该省份下存放所有地市数据的数组
					var cities = provs[i].regions;
					//遍历所有地市，加载其名称
					sele2.innerHTML = "<option>市</option>";
					for(var j = 0; j < cities.length; j++) {
						//得到地名
						var cityName = cities[j].name;
						//创建option标签
						var opt = document.createElement('option');
						opt.innerHTML = cityName;
						sele2.appendChild(opt);
					}
					//加载完跳出地市外层循环
					break;
				}
			}
			//给第二个输入框添加onchange事件
			sele2.onchange = function() {
				loadCounty(prov, this.value);
			}
		}

		//写一个行数记载区县
		function loadCounty(prove, city) {
			//获取所有省份的数组
			var provs = allData.regions;
			//获取第三个select框
			var sele3 = document.getElementById('countySel');
			//遍历该省份下所有城市
			for(var i = 0; i < provs.length; i++) {
				if(provs[i].name == prove) {
					//遍历该省份下所有地市
					var cities = provs[i].regions;
					for(var j = 0; j < cities.length; j++) {
						if(cities[j].name == city) {
							//加载这个市下的所有县区
							var counties = cities[j].regions;
							//遍历所有区县，吧信息加载出来
							sele3.innerHTML = "<option>区</option>"
							for(var k = 0; k < counties.length; k++) {
								//获取到区县名
								var countyName = counties[k].name;
								//创建option
								var opt = document.createElement('option');
								opt.innerHTML = countyName;
								sele3.appendChild(opt);
							}
							break;
						}
					}
					break;
				}
			}

		}
	}