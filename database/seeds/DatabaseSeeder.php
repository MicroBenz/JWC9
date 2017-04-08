<?php

use Illuminate\Database\Seeder;
use App\Teams;
use App\Questions;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        // Team Seeder
        Teams::create(['TeamName'=>'content', 'TeamID'=>1]);
        Teams::create(['TeamName'=>'design', 'TeamID'=>2]);
        Teams::create(['TeamName'=>'marketing', 'TeamID'=>3]);
        Teams::create(['TeamName'=>'central', 'TeamID'=>4]);

        // Question Seeder
        Questions::create(['QuestionText'=>'ทำไมถึงอยากจะมาเข้าค่าย JWC และคาดหวังอะไรจากค่ายในครั้งนี้', 'QuestionNumber'=>'1', 'TeamID'=>4]);
        Questions::create(['QuestionText'=>'เว็บไซต์อะไรที่น้องอยากสร้างในอนาคต พร้อมเหตุผล', 'QuestionNumber'=>'2', 'TeamID'=>4]);
        Questions::create(['QuestionText'=>'เล่าประสบการณ์ กิจกรรมและผลงานของน้อง', 'QuestionNumber'=>'3', 'TeamID'=>4]);
        Questions::create(['QuestionText'=>'เล่าความสามารถพิเศษของน้อง', 'QuestionNumber'=>'4', 'TeamID'=>4]);

        Questions::create(['QuestionText'=>'สมมุติว่ามีนักรบกำลังจะออกเดินทางไปช่วยเจ้าหญิงที่ปราสาทของบอส ซึ่งสามารถหยิบของได้เพียง 3 ชิ้นเท่านั้น น้องจะเลือกหยิบอะไรไป เพราะอะไร และจงเล่าเรื่องราวการการผจญภัยเพื่อไปช่วยเจ้าหญิงจากตัวร้าย ( ไม่จำกัดไอเดีย )', 'QuestionNumber'=>'1', 'TeamID'=>1]);
        Questions::create(['QuestionText'=>'จากเรื่องที่แต่งมา จงย่อให้เหลืออย่างน้อย 120 คำและไม่เกิน 150 คำ', 'QuestionNumber'=>'2', 'TeamID'=>1]);

        Questions::create(['QuestionText'=>'จงออกแบบนักรบในรูปแบบที่ตัวเองชื่นชอบมา 1 ตัวละคร โดยไม่จำกัดไอเดีย และ สามารถใช้โปรแกรมอะไรก็ได้ เมื่อเสร็จให้อัพโหลดไฟล์ที่บนเว็บไซต์ ด้วยนามสกุลไฟล์เป็น .png .jpg หรือ .gif ก็ได้โดยขนาดไม่เกิน 2 MB.
จากนั้น จงอธิบายรูปภาพที่ได้ออกแบบมา และจงอธิบายรูปภาพเพิ่มเติม ตัวอย่างเช่น ที่มาแรงบันดาลใจที่ออกแบบรูปภาพนี้ว่ามาจากไหน, เหตุผลที่ออกแบบอย่างนี้ หรือ ความหมายของรูปภาพ', 'QuestionNumber'=>'1', 'TeamID'=>2]);
        Questions::create(['QuestionText'=>'จงบอกชื่อเว็บไซต์ที่น้องชื่นชอบดีไซต์มากที่สุด เพราะอะไร และน้องชอบส่วนไหนของเว็บนั้นมากที่สุด และอยากจะแก้ไข ปรับปรุงส่วนไหนมากที่สุด', 'QuestionNumber'=>'2', 'TeamID'=>2]);

        Questions::create(['QuestionText'=>'สมมุติว่า ถ้าหากวันนี้น้องบังเอิญเก็บไอเท็มลับในตำนานอยู่ในถ้ำลับ ซึ่งไอเท็มนั้นยังไม่มีใครเคยพบเจอ และ ไม่รู้จักมาก่อน จงบอกชื่อไอเท็มที่น้องพบเจอและ จงตั้งราคาของไอเท็มนี้ และจะนำเสนอขายไอเท็มนี้อย่างไร ( ไม่จำกัดไอเดีย )', 'QuestionNumber'=>'1', 'TeamID'=>3]);
        Questions::create(['QuestionText'=>'น้องจะทำอย่างไร ถ้าน้องเป็นเจ้าของเว็บไซต์เกี่ยวกับเกมส์ นักรบที่เปิดเป็นวันแรก น้องจะมีวิธีการนำเสนอเว็บไซต์อย่างไร เพื่อที่จะดึงคนเข้าชมเว็บไซต์ พร้อมเหตุผล
( ไม่จำกัดไอเดีย )', 'QuestionNumber'=>'2', 'TeamID'=>3]);
    }
}
