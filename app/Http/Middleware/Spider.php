<?php

namespace App\Http\Middleware;

use Closure;

class Spider
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

    	$bots = [
    		'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',
		    'Googlebot/2.1 (+http://www.google.com/bot.html)',
		    '​Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',
	        'Mozilla/5.0 (iPhone; CPU iPhone OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Version/8.0 Mobile/12F70 Safari/600.1.4 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',

		    ];

	    $userAgent = $request->header('User-Agent');
	    foreach($bots as $bot){
	    	if($userAgent == $bot){
	    		return response(
	    		 '
				    <!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <title>Junior Webmaster Camp #9 || Digital Web War - มหาสงครามคนดิจิตอล</title>
			    <meta name="description" content="ค่ายสำหรับเหล่าผู้กล้าที่จะร่วมเดินทางค้นหาความสามารถลึกลับที่ซ่อนอยู่ในตัวของน้อง ๆ ม.ปลาย ฝึกปรือวิทยายุทธ ทั้ง 3 ศาสตร์ ได้แก่ Marketing, Content และ Design ขัดเกลาความคิดสร้างสรรค์ให้เฉียบคม พร้อมถ่ายทอดกระบวนการทำงานจริงและเรียนรู้เทคนิคพิเศษผ่านเหล่าเทพในวงการ Digital เพื่อร่วมกันสร้างอาวุธ ระดมสมอง เพื่อสร้างนวัตกรรมเว็บไซต์สุดสร้างสรรค์ไปกับค่าย JWC9: Digital Web War มหาสงครามคนดิจิตอล">
    <meta name="keywords" content="Junior Webmaster Camp, JWC, Digital, Web, ดิจิตอล, เว็บ">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <section>
        <header>
            <h1>Junior Webmaster Camp #9</h1>
			    </header>
        <article>
            <p>มหาสงครามคนดิจิตอล</p>
            <p>วันที่ 26-28 พฤษภาคม 2560</p>
            <p>จัดโดยสมาคมผู้ดูแลเว็บไทย</p>
            <p>ฟรีตลอดค่าย</p>
            <p>
			    ค่ายสำหรับเหล่าผู้กล้าที่จะร่วมเดินทางค้นหาความสามารถลึกลับที่ซ่อนอยู่ในตัวของน้อง ๆ ม.ปลาย
                ฝึกปรือวิทยายุทธ ทั้ง 3 ศาสตร์ ได้แก่ <b>Marketing</b>, <b>Content</b> และ <b>Design</b> ขัดเกลาความคิดสร้างสรรค์ให้เฉียบคม
                พร้อมถ่ายทอดกระบวนการทำงานจริงและเรียนรู้เทคนิคพิเศษผ่านเหล่าเทพในวงการ Digital เพื่อร่วมกันสร้างอาวุธ ระดมสมอง
                เพื่อสร้างนวัตกรรมเว็บไซต์สุดสร้างสรรค์ไปกับค่าย <b>JWC9</b>: <b>Digital</b> <b>Web</b> War มหาสงครามคนดิจิตอล
			    </p>
        </article>
    </section>
    <section>
        <header>
            <h2>สาขาที่เปิดรับสมัคร</h2>
        </header>
        <article>
            <p>
                <b>Web</b> <h3>Content</h3>
                <span>ไอเดียแปลกใหม่ต้องยกให้เธอ ชอบคิด ชอบทำ ชอบถ่ายทอดความสร้างสรรค์ผ่านตัวอักษร คำพูด และรูปภาพ</span>
                <ul>
                    <li><b>Content</b> Skill - เขียนได้ไม่มีวันหยุด</li>
                    <li>Creativity - คิดไอเดียแปลกใหม่อย่างสร้างสรรค์</li>
                    <li>Team Work - สามารถทำงานร่วมกับผู้อื่นได้ สื่อสารได้</li>
                </ul>
            </p>
            <p>
                <b>Web</b> <h3>Design</h3>
                <span>ชื่นชอบการออกแบบและเฉดสีที่หลากหลาย รวมกับจินตนาการที่แปลเปลี่ยนลายเส้น และรูปร่าง พร้อมสามารถนำไปใช้ได้จริง</span>
                <ul>
                    <li><b>Design</b> Skill - ความเป็นเลิศด้านการออกแบบ</li>
                    <li>Imagination - สามารถสร้างความคิดให้ออกมาเป็นภาพได้</li>
                    <li>Team Work - สามารถทำงานร่วมกับผู้อื่นได้ สื่อสารได้</li>
                </ul>
            </p>
            <p>
                <b>Web</b> <h3>Marketing</h3>
                <span>ถ้าชอบวางแผนใส่ใจและเข้าใจผู้อื่น น้องคือ Marketing เพราะการวางแผนการตลาดต้องเริ่มจากการเข้าใจลูกค้า</span>
                <ul>
                    <li><b>Marketing</b> Skill - สามารถวางแผนการตลาดได้</li>
                    <li>Attentive - สามารถใส่ใจและเข้าใจผู้อื่นได้</li>
                    <li>Team Work - สามารถทำงานร่วมกับผู้อื่นได้ สื่อสารได้</li>
                </ul>
            </p>
        </article>
    </section>
</body>

</html>

	    		');
		    }
	    }
        return $next($request);
    }
}
