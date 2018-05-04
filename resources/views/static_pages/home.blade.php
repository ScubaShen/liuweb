@extends('layouts.default')
@section('content')
  <div id="liu-header">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="/images/7.jpg">
          <div class="container">
            <div class="carousel-caption well">
              <h1>Welcome to <span>Liuweb</span></h1>
              <h4>You’ll always have fascinating places to be and friendly people to see.</h4>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/images/9.jpg">
          <div class="container">
            <div class="carousel-caption well">
              <h1>We Provide <span>Best Guidance</span></h1>
              <h4>You’ll always have fascinating places to be and friendly people to see.</h4>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/images/11.jpg">
          <div class="container">
            <div class="carousel-caption well">
              <h1>We Provide <span>Best Guidance</span></h1>
              <h4>You’ll always have fascinating places to be and friendly people to see.</h4>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <div id="liu-feature" class="border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center liu-heading">
          <h2>Splash Features</h2>
          <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="liu-center">
						<span class="icon">
							<i class="ti-vector"></i>
						</span>
            <h3>Pixel Perfect</h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="liu-center">
						<span class="icon">
							<i class="ti-tablet"></i>
						</span>
            <h3>Fully Responsive</h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="liu-center">
						<span class="icon">
							<i class="ti-settings"></i>
						</span>
            <h3>Web Development</h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="liu-center">
						<span class="icon">
							<i class="ti-ruler-pencil"></i>
						</span>
            <h3>Web Design</h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="liu-center">
						<span class="icon">
							<i class="ti-paint-roller"></i>
						</span>
            <h3>Accent Colours</h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="liu-center">
						<span class="icon">
							<i class="ti-announcement"></i>
						</span>
            <h3>Theme Updates</h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="liu-center">
						<span class="icon">
							<i class="ti-stats-up"></i>
						</span>
            <h3>Increase Earnings</h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="liu-center">
						<span class="icon">
							<i class="ti-magnet"></i>
						</span>
            <h3>Passive Income</h3>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="liu-solution">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center liu-heading">
          <h2>More Products</h2>
          <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
        </div>
      </div>
    </div>
    <div class="row carousel-background">
      <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 col-xs-12 carousel-background-padding">
        <div class="owl-carousel owl-carousel-carousel">
          <div class="item">
            <a href="#">
              <div class="liu-item">
                <img src="https://img.alicdn.com/tps/TB1aivqLXXXXXbwXVXXXXXXXXXX-144-144.png">
                <p class="liu-collapse-inverse">
                  <i class="liu-item-line"></i>
                </p>
                <h3 class="liu-item-title">电商解决方案</h3>
                <div class="liu-collapse">
                  <p>
                    结合大数据能力帮助电商企业快速搭建平台、应对业务高并发，剖析秒杀、视频直播等场景
                  </p>
                  <button class="btn btn-default">查看详情</button>
                </div>
              </div>
              <div class="liu-item-background">
                <img src="/images/carousel_1.jpg" alt="Free HTML5 Bootstrap Template by ">
              </div>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <div class="liu-item">
                <img src="https://img.alicdn.com/tps/TB1aivqLXXXXXbwXVXXXXXXXXXX-144-144.png">
                <p class="liu-collapse-inverse">
                  <i class="liu-item-line"></i>
                </p>
                <h3 class="liu-item-title">电商解决方案</h3>
                <div class="liu-collapse">
                  <p>
                    结合大数据能力帮助电商企业快速搭建平台、应对业务高并发，剖析秒杀、视频直播等场景
                  </p>
                  <button class="btn btn-default">查看详情</button>
                </div>
              </div>
              <div class="liu-item-background">
                <img src="/images/carousel_2.jpg" alt="Free HTML5 Bootstrap Template by ">
              </div>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <div class="liu-item">
                <img src="https://img.alicdn.com/tps/TB1aivqLXXXXXbwXVXXXXXXXXXX-144-144.png">
                <p class="liu-collapse-inverse">
                  <i class="liu-item-line"></i>
                </p>
                <h3 class="liu-item-title">电商解决方案</h3>
                <div class="liu-collapse">
                  <p>
                    结合大数据能力帮助电商企业快速搭建平台、应对业务高并发，剖析秒杀、视频直播等场景
                  </p>
                  <button class="btn btn-default">查看详情</button>
                </div>
              </div>
              <div class="liu-item-background">
                <img src="/images/carousel_3.jpg" alt="Free HTML5 Bootstrap Template by ">
              </div>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <div class="liu-item">
                <img src="https://img.alicdn.com/tps/TB1aivqLXXXXXbwXVXXXXXXXXXX-144-144.png">
                <p class="liu-collapse-inverse">
                  <i class="liu-item-line"></i>
                </p>
                <h3 class="liu-item-title">电商解决方案</h3>
                <div class="liu-collapse">
                  <p>
                    结合大数据能力帮助电商企业快速搭建平台、应对业务高并发，剖析秒杀、视频直播等场景
                  </p>
                  <button class="btn btn-default">查看详情</button>
                </div>
              </div>
              <div class="liu-item-background">
                <img src="/images/carousel_4.jpg" alt="Free HTML5 Bootstrap Template by ">
              </div>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <div class="liu-item">
                <img src="https://img.alicdn.com/tps/TB1aivqLXXXXXbwXVXXXXXXXXXX-144-144.png">
                <p class="liu-collapse-inverse">
                  <i class="liu-item-line"></i>
                </p>
                <h3 class="liu-item-title">电商解决方案</h3>
                <div class="liu-collapse">
                  <p>
                    结合大数据能力帮助电商企业快速搭建平台、应对业务高并发，剖析秒杀、视频直播等场景
                  </p>
                  <button class="btn btn-default">查看详情</button>
                </div>
              </div>
              <div class="liu-item-background">
                <img src="/images/carousel_5.jpg" alt="Free HTML5 Bootstrap Template by ">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="liu-process">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center liu-heading">
          <h2>Introduce Processing</h2>
          <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
        </div>
      </div>
      <div class="row" style="margin-left: 50px;">
        <div class="animate-box" data-animate-effect="fadeIn">
          <div class="col-md-3 col-sm-6">
            <div style="height: 101px;">
              <img src="http://s.sanhao.com/images/newpgot/self1.png" alt="">
            </div>
            <div style="margin-bottom: 50px;">
              <h3 style="color: #f54c53;margin-bottom: 20px;">1.智能测评</h3>
              <p style="padding-right: 25px;color: #777;">先诊断后学习，认真分析每个孩子的差异与不足，从问题出发。</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="animate-box" data-animate-effect="fadeIn">
            <div style="height: 101px;">
              <img src="http://s.sanhao.com/images/newpgot/self2.png" alt="">
            </div>
            <div style="margin-bottom: 50px;">
              <h3 style="color: #f54c53;margin-bottom: 20px;">2.培养方案</h3>
              <p style="padding-right: 25px;color: #777;">根据每个孩子特点，制定针对性学习方案，有效解决学习问题。</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="animate-box" data-animate-effect="fadeIn">
            <div style="height: 101px;">
              <img src="http://s.sanhao.com/images/newpgot/self3.png" alt="">
            </div>
            <div style="margin-bottom: 50px;">
              <h3 style="color: #f54c53;margin-bottom: 20px;">3.学情报告</h3>
              <p style="padding-right: 25px;color: #777;">课中教学家长远程旁听，课后学情反馈，全方位保障学习质量。</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="animate-box" data-animate-effect="fadeIn">
            <div style="height: 101px;">
              <img src="http://s.sanhao.com/images/newpgot/self4.png" alt="">
            </div>
            <div style="margin-bottom: 50px;">
              <h3 style="color: #f54c53;margin-bottom: 20px;">4.个性化教案</h3>
              <p style="padding-right: 25px;color: #777;">根据学生大致的知识缺陷范围，生成针对这名学生的个性化教案。</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <button class="liu-video-button">播放/暂停</button>
        <video id="liu-video-main" width="352" style="margin-top:15px;">
          <source src="http://www.zhangxinxu.com/study/media/cat.mp4" type="video/mp4" />
          Your browser does not support HTML5 video.
        </video>
      </div>

    </div>
  </div>
@stop