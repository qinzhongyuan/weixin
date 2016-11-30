
     
        {!!App\Http\Controllers\HomeController::head()!!}
        {!!App\Http\Controllers\HomelunboController::headlunbo()!!}
      
                    <div class="content">
                        <!--新闻中心-->
                         <div class="floor_one">
                        <div class="news_left fl claerfix">
                                <h3>新闻中心</h3>
                                <img class="Img" src="{{$arr['xinwen'][4]->pic}}">
                                <span>{{$arr['xinwen'][4]->name}}</span>
                                <p>{{$arr['xinwen'][4]->content}}</p>
                        </div>
                        
                        <div class="news_middle fl claerfix">

                                @if(!empty($arr['xinwen'][0]->name))
                                <div class="news_top">
                                        <a href="/home/page/xinwen?id={{$arr['xinwen'][0]->id}}"><h3>{{$arr['xinwen'][0]->name}}</h3></a>
                                        <span>{{$arr['xinwen'][0]->time}}</span>
                                        <p>{{$arr['xinwen'][0]->content}}</p>
                                </div>
                                @endif
                                @if(!empty($arr['xinwen'][2]->name))
                                <div class="news_bottom">
                                        <a href="/home/page/xinwen?id={{$arr['xinwen'][2]->id}}"><h3>{{$arr['xinwen'][2]->name}}</h3></a>
                                        <span>{{$arr['xinwen'][2]->time}}</span>
                                        <p>{{$arr['xinwen'][2]->content}}</p>
                                </div>
                                @endif
                        </div>
                        
                        <div class="news_right fl claerfix">
                                @if(!empty($arr['xinwen'][1]->name))
                                <div class="news_top">
                                        <a href="/home/page/xinwen?id={{$arr['xinwen'][1]->id}}"><h3>{{$arr['xinwen'][1]->name}}</h3></a>
                                        <span>{{$arr['xinwen'][1]->time}}</span>
                                        <p>{{$arr['xinwen'][1]->content}}</p>
                                </div>
                                @endif
                                 @if(!empty($arr['xinwen'][3]->name))
                                <div class="news_bottom">
                                        <a href="/home/page/xinwen?id={{$arr['xinwen'][3]->id}}"><h3>{{$arr['xinwen'][3]->name}}</h3></a>
                                        <span>{{$arr['xinwen'][3]->time}}</span>
                                        <p>{{$arr['xinwen'][3]->content}}</p>
                                </div>
                                @endif
                        </div>
                </div>
                        
                        <!--二楼-->
                        <div class="floor_two">
                            <div class="two_top">
                                <div class="two_left fl claerfix">
                                    <img src="/home/img/AD0I4oLBBRACGAAg2LKSwAUooLq4pQEw4AM4gwI.jpg">
                                </div>
                                
                                <div class="two_right claerfix fr">
                                    <h3>塑造生态价值品牌</h3>
                                    <font>以“做一家负责任的投资公司”为使命</font>
                                    <p>以“诚信天下，稳健一生，追求卓越”为企业核心价值观，以“推</p>
                                    <p>动和实现可持续的价值增长”为经营理念，不断为客户、股东、员</p>
                                    <p>工、社会和利益相关者创造价值，为社会和谐做出贡献！</p>
                                </div>
                            </div>
                            <div class="two_bottom">
                                <div class="two_bottom_box fl claerfix">
                                    <div class="introduct fl claerfix">
                                        <ul>
                                            <li style="margin: 20px 0 18px 90px;"><img src="/home/img/plane.png"></li>
                                            <li>灵活自由，投资安全</li>
                                        </ul>
                                    </div>
                                    <div class="introduct fr claerfix">
                                        <ul>
                                            <li style="margin: 10px 0 15px 90px;"><img src="/home/img/moneybag.png"></li>
                                            <li>平台实力雄厚，收益更高</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="two_bottom_box fr claerfix">
                                    <ul>
                                        <li style="margin: 20px 0 17px 190px;"><img src="/home/img/hand.png"></li>
                                        <li>AAA级信用企业，拥有优质团队，智能资金分散，资金全透明</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!--三楼-->
                        <div class="floor_three">
                             <div class="three_left fl claerfix">
                                <h5>{{$arr['shichang'][6]->name}}</h5>
                                <a href="/home/page/shichang?id={{$arr['shichang'][0]->id}}"><p>{{$arr['shichang'][0]->name}}</p></a>
                                <a href="/home/page/shichang?id={{$arr['shichang'][1]->id}}"><p>{{$arr['shichang'][1]->name}}</p></a>
                                <a href="/home/page/shichang?id={{$arr['shichang'][2]->id}}"><p>{{$arr['shichang'][2]->name}}</p></a>
                                <a href="/home/page/shichang?id={{$arr['shichang'][3]->id}}"><p>{{$arr['shichang'][3]->name}}</p></a>
                                <a href="/home/page/shichang?id={{$arr['shichang'][4]->id}}"><p>{{$arr['shichang'][4]->name}}</p></a>
                                
                            </div>
                            
                            <div class="three_right fr claerfix">
                                    <img class="Imga" src="{{$arr['shichang'][6]->pic}}">
                                    <div class="neirong fl claerfix news_bottom ">
                                            <h4>{{$arr['shichang'][5]->name}}</h4>
                                          <p>{{$arr['shichang'][5]->content}}</p>
                                            
                                    </div>
                                    
                                    <div class="more">
                                            <a href="/home/page/shichang?id={{$arr['shichang'][5]->id}}">查看详情</a>
                                    </div>
                                            
                            </div>
                        </div>
                        
                        <!--四楼-->
                        <div class="floor_four">
                            <div class="four_left fl claerfix">
                                <h3>{{$arr['licai'][4]->name}}</h3>
                                <a href="/home/page/licai?id={{$arr['licai'][0]->id}}">{{$arr['licai'][0]->name}}</a><span>{{$arr['licai'][0]->time}}</span>
                                <a href="/home/page/licai?id={{$arr['licai'][1]->id}}">{{$arr['licai'][1]->name}}</a><span>{{$arr['licai'][1]->time}}</span>
                                <a href="/home/page/licai?id={{$arr['licai'][2]->id}}">{{$arr['licai'][2]->name}}</a><span>{{$arr['licai'][2]->time}}</span>
                            </div>
                            <div class="four_middle fl claerfix">
                                    <img src="{{$arr['licai'][4]->pic}}">
                            </div>
                            <div class="four_right fl claerfix">
                                    <img src="/home/img/AD0I4oLBBRACGAAg8ZqWwAUo-rLHrAMw5gE49QE.jpg">
                            </div>
                        </div>
                        
                        <!--合作伙伴-->
                        <div class="friend_title">
                            合作伙伴
                        </div>
                        <div class="indexmaindiv" id="indexmaindiv">
                        <div class="indexmaindiv1 clearfix">
                            <div class="stylesgoleft" id="goleft"></div>
                            <div class="maindiv1 " id="maindiv1">
                                <ul id="count1">
                                    @foreach($arr['flink'] as $v)
                                                <li>
                                                        <div class="playerdetail">
                                                                <div class="detailimg"><a href="{{$v->url}}"><img src="{{$v->pic}}" /></a></div>
                                                        </div>
                                                </li>
                                        @endforeach
                                    
                                </ul>
                            </div>
                            <div class="stylesgoright" id="goright"></div>
                        </div>
                        <script type="text/javascript">
                        window.onload = function() {
                                var oBtnLeft = document.getElementById("goleft");
                                var oBtnRight = document.getElementById("goright");
                                var oDiv = document.getElementById("indexmaindiv");
                                var oDiv1 = document.getElementById("maindiv1");
                                var oUl = oDiv.getElementsByTagName("ul")[0];
                                var aLi = oUl.getElementsByTagName("li");
                                var now = -5 * (aLi[0].offsetWidth + 13);
                                oUl.style.width = aLi.length * (aLi[0].offsetWidth + 13) + 'px';
                                oBtnRight.onclick = function() {
                                        var n = Math.floor((aLi.length * (aLi[0].offsetWidth + 13) + oUl.offsetLeft) / aLi[0].offsetWidth);

                                        if(n <= 5) {
                                                move(oUl, 'left', 0);
                                        } else {
                                                move(oUl, 'left', oUl.offsetLeft + now);
                                        }
                                }
                                oBtnLeft.onclick = function() {
                                        var now1 = -Math.floor((aLi.length / 5)) * 5 * (aLi[0].offsetWidth + 13);

                                        if(oUl.offsetLeft >= 0) {
                                                move(oUl, 'left', now1);
                                        } else {
                                                move(oUl, 'left', oUl.offsetLeft - now);
                                        }
                                }
                                var timer = setInterval(oBtnRight.onclick, 5000);
                                oDiv.onmouseover = function() {
                                        clearInterval(timer);
                                }
                                oDiv.onmouseout = function() {
                                        timer = setInterval(oBtnRight.onclick, 5000);
                                }

                        };

                        function getStyle(obj, name) {
                                if(obj.currentStyle) {
                                        return obj.currentStyle[name];
                                } else {
                                        return getComputedStyle(obj, false)[name];
                                }
                        }

                        function move(obj, attr, iTarget) {
                                clearInterval(obj.timer)
                                obj.timer = setInterval(function() {
                                        var cur = 0;
                                        if(attr == 'opacity') {
                                                cur = Math.round(parseFloat(getStyle(obj, attr)) * 100);
                                        } else {
                                                cur = parseInt(getStyle(obj, attr));
                                        }
                                        var speed = (iTarget - cur) / 6;
                                        speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
                                        if(iTarget == cur) {
                                                clearInterval(obj.timer);
                                        } else if(attr == 'opacity') {
                                                obj.style.filter = 'alpha(opacity:' + (cur + speed) + ')';
                                                obj.style.opacity = (cur + speed) / 100;
                                        } else {
                                                obj.style[attr] = cur + speed + 'px';
                                        }
                                }, 30);
                        }
                </script>
                    </div>
                
                </div>          
            </div>
            
            <!-- <div class="none">
               
                <div class="banner">
                    <img src="img/AD0I4oLBBRAEGAAgoaOXwAUo5IXQxgMwwAc49AM.png">
                </div>
                
               
                <div class="aboutus_content">
                    <div class="idea">
                        <div class="idea_left fl claerfix">
                            <img src="img/AD0I4oLBBRAEGAAgpomXwAUohYSY8AYwJzg0.png">
                            <font>使命</font>
                            <p>让财富管理更美好</p>
                        </div>
                        
                        <div class="idea_center fl claerfix">
                            <img src="img/AD0I4oLBBRAEGAAgiImXwAUoivaYqQIwNjg0.png">
                            <font>核心价值</font>
                            <p>高效、快捷的理财服务体系</p>
                        </div>
                        
                        <div class="idea_right fl claerfix">
                            <img src="img/AD0I4oLBBRAEGAAg_4iXwAUoorXgJzA5ODQ.png">
                            <font>主张</font>
                            <p>只为成就更好的你</p>
                        </div>
                    </div>
                    
                    <div class="about">
                        <div class="about_left fl claerfix">
                            <img src="img/AD0I4oLBBRAEGAAgh5GXwAUoxIzJhwIwuAM43QI.png">
                        </div>
                        
                        <div class="about_right fr claerfix">
                            <font>关于我们</font>
                            <span>
                                <div><br></div>
                                <div>XX证券（集团）股份有限公司（以下简称“XX保险”）是在1991年5月13日</div>
                                <div>成立的XX保险公司的基础上组建而成的保险集团公司，总部设在上海并且在</div>
                                <div>上海证交所和香港联交所成功上市。</div>
                                <div>XX保险以“做一家负责任的保险公司”为使命，以“诚信天下，稳健一生，</div>
                                <div>追求卓越”为企业核心价值观，以“推动和实现可持续的价值增长”为经营理</div>
                                <div>念，不断为客户、股东、员工、社会和利益相关者创造价值，为社会和谐做出</div>
                                <div>贡献。XX保险旗下拥有XX产险、XX寿险、XX资产管理公司和长江养老保险等</div>
                                <div>专业子公司，保持持续领先的市场地位。</div>
                            </span>
                        </div>
                    </div>
                    
                    <div class="team">
                        <div class="team_title">
                            <h3>创始团队</h3>
                        </div>
                        <div class="team_bottom">
                            <div class="team_cent fl claerfix">
                                <div class="img_box">
                                    <img src="img/AD0I4oLBBRAEGAAg25mXwAUotPynngMwyAE4yAE.png">
                                </div>
                                
                                <div class="name">
                                    <font>Jame</font><br>
                                    <span>创始人</span>
                                    <p>毕业于清华大学经济管理学院金融系。<br>毕业后背包旅行8个多月，游历包括南极<br>在内的30多个国家和地区。</p>
                                </div>
                            </div>
                            <div class="team_cent fl claerfix">
                                <div class="img_box">
                                    <img src="img/AD0I4oLBBRAEGAAg25mXwAUotPynngMwyAE4yAE.png">
                                </div>
                                <div class="name">
                                    <font>Jame</font><br>
                                    <span>创始人</span>
                                    <p>毕业于清华大学经济管理学院金融系。<br>毕业后背包旅行8个多月，游历包括南极<br>在内的30多个国家和地区。</p>
                                </div>
                            </div>
                            <div class="team_cent fl claerfix">
                                <div class="img_box">
                                    <img src="img/AD0I4oLBBRAEGAAg25mXwAUotPynngMwyAE4yAE.png">
                                </div>
                                <div class="name">
                                    <font>Jame</font><br>
                                    <span>创始人</span>
                                    <p>毕业于清华大学经济管理学院金融系。<br>毕业后背包旅行8个多月，游历包括南极<br>在内的30多个国家和地区。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                                                      
            </div> -->
            
            <!--
                作者：446754162@qq.com
                时间：2016-11-15
                描述：行业资讯
            -->
            <!-- <div class="none">
                <div class="banner">
                    <img src="img/AD0I4oLBBRACGAAg_PuWwAUosMbN4QMwwAc49AM.jpg">
                </div>
                
                <div class="industry">
                    <div class="industry_top">
                        <img class="fl claerfix" src="img/AD0I4oLBBRACGAAgi-6WwAUol_z8wgIwhgM4-AI.jpg">
                        <div class="main_right fr claerfix">
                            <div class="main_top">
                                <h4>外币理财的这四种方式 你看懂了吗？</h5> <span>2016-10-28</span>
                                <p>近年，随着国内很多理财市场的逐渐下调，很多投资者已开始向外币理财市场靠拢。近年，随着国内很多理财市场的逐渐下调</p>
                            </div>
                            
                            <div class="main_middle">
                                <h4>外币理财的这四种方式 你看懂了吗？</h5> <span>2016-10-28</span>
                                <p>近年，随着国内很多理财市场的逐渐下调，很多投资者已开始向外币理财市场靠拢。近年，随着国内很多理财市场的逐渐下调</p>
                            </div>
                            
                            <div class="main_bottom" style="border: none;">
                                <h4>外币理财的这四种方式 你看懂了吗？</h5> <span>2016-10-28</span>
                                <p>近年，随着国内很多理财市场的逐渐下调，很多投资者已开始向外币理财市场靠拢。近年，随着国内很多理财市场的逐渐下调</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="industry_bottom">
                        <div class="main">
                            <span><i>28</i><br><a>2016/10</a></span>
                            <h4>心态影响结果 90后应该如何理财？</h5>
                            <p>这个就是告诉大家不管做任何事情，做好充分的准备，才可能获得成功。这个就是告诉大家不管做任何事情，做好充分的准备</p>
                        </div>
                        
                        <div class="main">
                            <span><i>28</i><br><a>2016/10</a></span>
                            <h4>心态影响结果 90后应该如何理财？</h5>
                            <p>这个就是告诉大家不管做任何事情，做好充分的准备，才可能获得成功。这个就是告诉大家不管做任何事情，做好充分的准备</p>
                        </div>
                        
                        <div class="main">
                            <span><i>28</i><br><a>2016/10</a></span>
                            <h4>心态影响结果 90后应该如何理财？</h5>
                            <p>这个就是告诉大家不管做任何事情，做好充分的准备，才可能获得成功。这个就是告诉大家不管做任何事情，做好充分的准备</p>
                        </div>
                        
                        <div class="main" style="border: none;">
                            <span><i>28</i><br><a>2016/10</a></span>
                            <h4>心态影响结果 90后应该如何理财？</h5>
                            <p>这个就是告诉大家不管做任何事情，做好充分的准备，才可能获得成功。这个就是告诉大家不管做任何事情，做好充分的准备</p>
                        </div>
                        
                    </div>
                </div>
            </div> -->
            
            <!--
                作者：446754162@qq.com
                时间：2016-11-15
                描述：社会公益
            -->
           <!--  <div class="none">
                <div class="banner">
                    <img src="img/AD0I4oLBBRACGAAgjYiXwAUorIeVmgIwwAc49AM.jpg">
                </div>
                
                <div class="public">
                    <div class="public_box">
                        <div class="public_left fl claerfix">
                            <img src="img/AD0I4oLBBRACGAAg9b_WwAUo8NTDkwIwzAM4lAI.jpg">
                        </div>
                        <div class="public_right fr claerfix">
                            <h3>当我们在一起</h3>
                            <p>
                                “月捐悦多”是招商银行联合多家公益机构推出的小额月度捐赠计划，我们倡导人人公益，践行可持续公益路径；我们鼓励更多的人加入公益大家庭，让世界因为您的加入而变得更加美好。每人每月一份爱，点滴行动，汇爱成海。
                            </p>
                            <section>公益组织：深圳壹基金公益基金会</section>
                            
                            <div class="checkmore">
                                <a href="javascript:;">查看详情</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="public_box">
                        <div class="public_left fl claerfix">
                            <img src="img/AD0I4oLBBRACGAAgg8CWwAUo-Z7cgwIwzAM4lAI.jpg">
                        </div>
                        <div class="public_right fr claerfix">
                            <h3>当我们在一起</h3>
                            <p>
                                “月捐悦多”是招商银行联合多家公益机构推出的小额月度捐赠计划，我们倡导人人公益，践行可持续公益路径；我们鼓励更多的人加入公益大家庭，让世界因为您的加入而变得更加美好。每人每月一份爱，点滴行动，汇爱成海。
                            </p>
                            <section>公益组织：深圳壹基金公益基金会</section>
                            
                            <div class="checkmore">
                                <a href="javascript:;">查看详情</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="public_box">
                        <div class="public_left fl claerfix">
                            <img src="img/AD0I4oLBBRACGAAgkMCWwAUowNvi9wYwzAM4lAI.jpg">
                        </div>
                        <div class="public_right fr claerfix">
                            <h3>当我们在一起</h3>
                            <p>
                                “月捐悦多”是招商银行联合多家公益机构推出的小额月度捐赠计划，我们倡导人人公益，践行可持续公益路径；我们鼓励更多的人加入公益大家庭，让世界因为您的加入而变得更加美好。每人每月一份爱，点滴行动，汇爱成海。
                            </p>
                            <section>公益组织：深圳壹基金公益基金会</section>
                            
                            <div class="checkmore">
                                <a href="javascript:;">查看详情</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <!--
                作者：446754162@qq.com
                时间：2016-11-15
                描述：合作机构
            -->
            <!-- <div class="none">
                
                <div class="banner">
                    <img src="img/AD0I4oLBBRACGAAgjYiXwAUorIeVmgIwwAc49AM.jpg">
                </div>
                
                <div class="content">
                    <div class="cooperation">
                        
                    </div>
                </div>
            </div> -->
            
            
            <!-- <div class="none">
            
                <div class="mainContainer">

                    <div class="navContent fl claerfix">
                        <a class="logo_img" href="#"><img class="logobox" src="images/logo.png"></a>
                        <a class="book" href="#">左右微刊</a>
                        <a class="box" href="#">联系我们</a>
                        <a class="box01" href="#">左右的文</a>
                        <a class="contact"href="#">左右福利</a>
                    </div>
                    
                    <div class="container">
                        <div class="infoBox">
                            <P><span class="status">
                                    「左右的工作室」
                                </span>
                                    本期招聘职位：本期只招
                                <span class="greenTest">
                                    90后
                                </span>
                                    ，大叔，大姐，抱歉喽。<br>
                                <span class="friend">
                                    &nbsp;&nbsp;&nbsp;&nbsp;友情提示：我们不是招聘指南的搬运工，一下具体职位技能要求，<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;请参见其他公司招聘指南。我们只能形容我们心中的理想对象类型。
                                </span>
                            </P>
                            <div class="message">
                                <p class="edit">编辑：<br> 文字好，更懂编好文字。
                                    <br> 自恋，更爱自嘲。
                                    <br> 自由，而不油。想对象类型。
                                </p>
                                <p class="devise">设计：<br> 爱画画，爱拍照，会P图。
                                    <br> 爱一切与图有关。
                                    <br> 我们图什么，图作品有个性。
                                </p>
                                <p class="publicity">宣传：<br> 说话有点，吐槽有点。
                                    <br> 待人处事也很正点。
                                    <br> 对时下年轻人常逛得
                                    <br> 媒体属性都有涉及，
                                    <br> 不要求你人际宽广，
                                    <br> 只要求你心里有数。
                                </p>
                                <p class="media">新媒体运营：<br> WEIBO豆瓣INSTA知乎
                                    <br> NICE朋友圈LOFT美拍......
                                    <br> 统统玩转！
                                    <br> 跟上网友的调子，
                                    <br> 踩得住火爆的槽点。
                                    <br> 有审美的技术控。
                                </p>
                                <p class="plan">活动策划及执行：<br> 社会红人party玩家，
                                    <br> 执行操盘一把手。
                                    <br> 能起范儿，还有人服。
                                    <br> 玩出想法，干得漂亮
                                </p>
                                <p class="world">以上都是各种形容，<br> 最后三个词：
                                    <br>
                                    <span>善良，靠谱，主动。</span></p>
                                <p class="job">如果你认为<br> 这个招聘完全就是写给你的，
                                    <br> 也许你是我们未来的同事，
                                    <br> 我们可以相约邮箱里见。
                                </p>
                                <a class="joinus" href="#">加入我们</a>
                            </div>
                        </div>
                        
                        <div class="secondInfo">
                            <div class="bigTest">
                                <p class="young">
                                    <span>左右</span>
                                    是一个认真表达年轻人生活状态和态度的交互平台。我们用最简单的方式传达同时空下的生活体验和个人价值观。 <br> 我们相信只有还原出一个人饱满的世界，我们才能找到左右为伴的彼此。
                                </p>
                                <p class="fond">
                                    <span>左右</span>
                                    微刊，发现身边年轻的人和事。每周3、6上新。微博@工作室
                                </p>
                            </div>
                            <div class="bannerBox">
                                <div class="firstBanner"> <img src="images/logo_5.png">
                                    <p>关注左右<br>
                                        <span>
                                            微信查询<br>
                                            “chinaz”
                                        </span>
                                    </p>
                                </div>
                                <div class="secondBanner"> <img src="images/logo_6.png">
                                    <p>左右内容<br>
                                        <span>
                                            点击右上角<br>
                                              查看公共号<br>
                                              查看历史消息
                                        </span>
                                    </p>
                                </div>
                                <div class="thirdBanner"> <img src="images/logo_7.png">
                                    <p>关注投稿<br>
                                        <span>
                                            Email投稿至<br>
                                            chinaz@vip.126.com
                                        </span>
                                    </p>
                                </div>
                                <div class="fourBanner"> <img src="images/logo_8.png">
                                    <p>左右招聘<br>
                                        <span>
                                            Email简历作品至<br>
                                            chinaz@126.com
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="thirdInfo">
                            <div class="fontTest">
                                <P class="workRoom">左右的工作室</P>
                                <p class="address">
                                    地址：北京<br> 简历及作品发送至：
                                    <br> chinaz@126.com
                                    <br> 如果你方便也请一并告诉我们你的
                                    <br> blog、微博、insta、知乎等账户。
                                </p>
                            </div>
                            <div class="map">
                                <img src="images/map.png">
                            </div>
                        </div>
                        
                        <div class="fourInfo">
                            <div class="life">
                                <p>左右的陌生人&nbsp;&nbsp;|&nbsp;&nbsp;比编剧更厉害的是生活</p>
                            </div>
                            <div class="blue"> <img src="images/banner_6.png">
                                <div class="rightBox"> 
                                    <span>
                                        地铁站外，公交站前，忙碌一天的人们，<br>
                                        又将沿着各自的轨道回到这个城市某个角落。<br>
                                        日复一日的画面，看似每个人都活着同样的轨迹，<br>
                                        可每个人在那些角落发生的故事，<br>
                                        却有着比影视剧还精彩的桥段。<br>
                                        别以为编剧厉害，生活比什么都厉害。<br>
                                        （旁观者：二师兄）
                                    </span>
                                    <p>左右的陌生人|旁观者的镜头，旁观者的想。</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="lastInfo">
                            <div class="walfareBox">
                                <p class="walfare">左右的福利 | 中秋，给耳朵“贴秋膘”</p>
                                <p class="like">左右首次福利，请使劲儿喜欢。首次试水福利，数量有限，仅此三份，先到先得。<br> 主持人安琥倾力打造MODRILL二代子弹头系列AX49耳机。 《年代秀》录制现场总裁互赠好礼。
                                    <br> 刘同自己留一副，另外三幅，左右的福利社抢先了。
                                </p>
                                <p class="sangs">你可以带着它去听“孤独”歌单。歌单二维码都散落在刘同新书《你的孤独，虽败犹荣》各个章节里，你倒是扫过没有啊？</p>
                            </div>
                            <div class="bottomBox">
                                <div class="photoBox"> <img src="images/banner_1.png"> <img src="images/banner_2.png"> <img src="images/banner_3.png"> <img src="images/banner_4.png"> </div>
                                <div class="attend">
                                    <p>参与方式：</p>
                                    <span>1.关注左右的微信：搜索公众号ID：左右space & 扫描右方二维码关注；<br>
                                                2.将左右账号中任意西黄的内容转发至朋友圈，并写上你的感受或西黄的原因，<br>
                                                &nbsp;&nbsp;&nbsp;截图在对话框回复给我们；<br>
                                                3.截止日期：9月18日周四 公布获奖名单。
                                    </span>
                                    <img src="images/banner_5.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>          
                <script>
                    $(function(){
                        $(".container>div").hide();
                        $(".container>div:eq(0)").show();   
                        
                        $(".navContent a").click(function(){
                            var n = $(".navContent a").index(this);
                            $(".navContent a").index(this);
                            $(".container>div").hide();
                            $(".container>div:eq("+n+")").show();   
                        })  
                    })
                </script>
            </div> -->
        {!!App\Http\Controllers\BottomController::bottom()!!}
        
        
    