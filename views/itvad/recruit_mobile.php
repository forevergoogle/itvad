<?php
/**
 * Created by PhpStorm.
 * User: mith
 * Date: 9/11/2015
 * Time: 2:55 PM
 */?>

<section class="recruit-banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div data-sr='enter left, hustle 200px, no reset'>
                    <span class="text-date"><?php if($recruit_cate=="tech" ){ ?>Đội ngũ kỹ thuật<?php }elseif($recruit_cate=="sale"){?>Đội ngũ Kinh doanh<?php }else{?> Đội ngũ Sản phẩm <?php } ?></span>
                    <span class="text-title" style="font-size: 42px;">Tin tuyển dụng</span>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-2 col-xs-5 col-xs-offset-1">
                <div class="box-image">
                    <img data-sr='wait 1s, roll -360deg, opacity 0, no reset' class="img-1" width="310" src="<?php echo base_url()?>/assets/images/Recruitment-Detail/Recruitment-Detail-03.png" alt="">
                    <img data-sr='wait 1.5s, scale 20%, no reset' class="img-2" width="140" src="<?php echo base_url()?>/assets/images/Recruitment-Detail/Recruitment-Detail-04.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="recruit">
    <div class="container">
        <div class="recruit-body">
            <?php if($recruit_cate=="tech" && $recruit_id == 1): ?>
                <div class="info-recruit">
                    <h1>Big Data Wizard (aka: Backend Engineer )</h1>
                    <p>  <img width="700" class="img-responsive center-block" src="<?php echo base_url()?>/assets/images/Recruitment/big_data_wizard.jpg"></p>
                    <p> Tất cả những gì bạn có là data, và nhiệm vụ của bạn biến data "vô nghĩa" thành những thông tin và tri thức , "có giá trị mang tính ảnh huởng cao" cho công ty, tổ chức, nguời dùng và khách hàng.</p>
                    <p> Ở vị trí công việc này, bạn không chỉ 1 IT engineer chỉ biết code và code. Bạn là 1 phù thủy (Wizard) về dữ liệu, code chỉ là 1 kỹ năng căn bản để bạn có thể khai thác và chuyển hóa các format thông tin từ "rác" thành "vàng"</p>
                    <p> Mỗi tri thức bạn tìm đuợc từ hàng GB dữ liệu log sẽ đánh giá tài năng cũng như khả năng ảnh huởng của bạn đến business công ty cũng giá trị thu nhập của bạn.</p>
                    <p> Công cụ bạn có thể đuợc train và học dùng:<strong>Python, Scala, Java và ShellScript với RFX, Redis, Apache Spark, SQL, Kafka và Hadoop</strong> </p>
                    <p> Bạn có sử dụng Linux thoải mái và thích tư duy “Định luợng mọi thứ, kể cả hành vi yêu hoặc ghét của con nguời” (Behavioral analytics), thích Tóan Xác suất thống kê (Probability & Statistics)  có chút kiến thức về Kinh tế (Behavioral Economics) và bạn thích A/B testing mọi thứ. Nguồn gốc của mọi sự tiến hóa đều bắt đầu việc “thử Đúng/Sai” để tìm ra con đuờng tối ưu ở vào một hòan cảnh cụ thể (context).</p>
                    <p><strong>THÔNG TIN LIÊN HỆ</strong></p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;">Liên hệ:</div> Mr. Triều</p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;">Email:</div> trieunt@fpt.com.vn</p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;"> Điện thoại:</div> 090 312 2290</p>
                </div>
            <?php endif; ?>
            <?php if($recruit_cate=="tech" && $recruit_id == 2): ?>
                <div class="info-recruit">
                    <h1>Advertising UX Wizard (aka: Front-end SDK Engineer )</h1>
                    <p><img width="700" class="img-responsive center-block" src="<?php echo base_url()?>/assets/images/Recruitment/Advertising_UX_wizard.png"></p>

                    <p> Thời đại của Broadband Internet và nhu cầu con nguời ngày càng cao. Cách tiếp cận thông tin của user đã thay đổi đáng kể trong từ 5 năm qua.
                    </p>
                    <p> Nhiệm vụ chính là phát triển bộ SDK cho các thiết bị <strong>(PC, SmartTV, Mobile và Wearables,…)</strong> , nghiên cứu về trải nghiệm nguời dùng UX và cách thức đưa thông tin mang tính <strong>"Interactive Advertising Entertainments"</strong>(như Video, Musics,…)
                    </p>
                    <p> VD: user đang xem trận bóng đá hấp dẫn, công việc của bạn viết 1 framework để đưa ra các thông tin mang tính “quảng cáo” nhưng không làm user bực mình
                    </p>
                    <p> Bạn có thể học và dùng 1 trong các tools sau: <strong>HTML5, CSS3 , JavaScript, Java (trên Android) , Objective-C(iOS) + Web Service 1 tí, JSON , XML ...</strong>
                    </p>
                    <p> Bạn nên học thêm UX và tâm lý nguời dùng để truyền tải thông tin cho user thật nhanh chóng . Quan trọng là đừng làm mọi nguời muốn đập màn hình vì những thứ bạn sẽ show cho họ thấy
                    </p>
                    <p><strong>THÔNG TIN LIÊN HỆ</strong></p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;">Liên hệ:</div> Mr. Triều</p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;">Email:</div> trieunt@fpt.com.vn</p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;"> Điện thoại:</div> 090 312 2290</p>

                </div>
            <?php endif; ?>
            <?php if($recruit_cate=="tech" && $recruit_id == 3): ?>
                <div class="info-recruit">
                    <h1>Data Story Teller (aka: Front-end Engineer )</h1>
                    <p>  <img width="700" class="img-responsive center-block" src="<?php echo base_url()?>/assets/images/Recruitment/Data_Storyteller.png"></p>

                    <p>Bạn sẽ làm việc với Data Wizard Engineer  để đảm bảo thành quả lao động từ back-end đến front-end không làm các khách hàng (như các sếp và những nguời sẽ trả luơng cho bạn) cảm thấy “không hiểu gì”, “không thấy gì” từ những đồng tiền họ bỏ ra.
                    </p>
                    <p>Bạn sẽ làm những report tuyệt đẹp và “không thể tin nổi” để mọi nguời hiểu câu chuyện : từ kinh doanh, doanh số đến hành vi con nguời , một cách thật dễ tiếp thu và chính xác.
                    </p>
                    <p>Bạn sẽ là nguời kể chuyện bằng Code <strong>(PHP, JavaScript, D3.js, HTML5, và CSS3) và Data ( JSON, XML, PostgresSQL, MongoDB,…)</strong>. Ví dụ vài hình ảnh bạn sẽ tự suy luận khi code.
                    </p>
                    <p><strong>THÔNG TIN LIÊN HỆ</strong></p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;">Liên hệ:</div> Mr. Triều</p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;">Email:</div> trieunt@fpt.com.vn</p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;"> Điện thoại:</div> 090 312 2290</p>

                </div>
            <?php endif; ?>
            <!--Kinh doanh-->
            <?php if($recruit_cate=="sale" && $recruit_id == 1): ?>
                <div class="info-recruit">
                    <h1>Giám đốc Kinh doanh Toàn quốc</h1>
                    <p><img width="700" class="img-responsive center-block" src="<?php echo base_url()?>/assets/images/Recruitment/we-need-you.jpeg"></p>
                    <p style="font-style: italic;">(Ưu tiên làm việc tại TP. HCM)</p>
                    <p>Trong xu hướng “số hóa” ngành quảng cáo, iTVad là đơn vị đi đầu trong việc cung cấp giải pháp quảng cáo truyền hình trực tuyến. Dịch vụ của iTVad hướng tới việc phát huy tầm ảnh hưởng của quảng cáo truyền hình, đồng thời kết hợp với sự chính xác và khả năng tương tác của công nghệ trực tuyến.</p>
                    <p>Xác định đúng xu hướng và phát triển tập trung giúp cho iTVad có được sự phát triển nhanh chóng khi sở hữu một lượng lớn tài nguyên quảng cáo giá trị và đủ khả năng đáp ứng yêu cầu rộng khắp của các nhà quảng cáo, iTVad đang tìm kiếm nhân sự cho vị trí Giám đốc Kinh doanh Toàn quốc, người sẽ đưa ra cái nhìn bao quát và giúp dẫn dắn đội ngũ kinh doanh đạt được các mục tiêu đề ra.</p>
                    <p><strong>Các chức năng của công việc</strong></p>
                    <p style="text-indent: 20px;">  -  Quản lý accounts và cung cấp tư vấn về chuyên môn để khách hàng có thể hiểu rõ và sử dụng dịch vụ của iTVad một cách hiệu quả.</p>
                    <p style="text-indent: 20px;">  -  Lãnh đạo đội ngũ kinh doanh thông qua việc đánh giá, phân bổ các kênh bán hàng và quyết định các định hướng, đề xuất kinh doanh.</p>
                    <p style="text-indent: 20px;">  -  Thường xuyên tham gia các hoạt động của ngành và ghi nhận những cơ hội và nguy cơ ảnh hưởng đến hoạt động của iTVad.</p>
                    <p style="text-indent: 20px;">  -  Giao tiếp tốt với khách hàng và những bộ phận khác trong iTVad để đảm quá công việc vận hành thông suốt.</p>
                    <p style="text-indent: 20px;">  -  Xác định rõ nhu cầu và cơ hội có thể áp dụng nhằm phát triển dịch vụ.</p>
                    <p style="text-indent: 20px;">  -  Tham gia xây dựng chiến lược sản phẩm và cùng các bộ phận trong iTVad phát triển các sản phẩm mới.</p>
                    <p style="text-indent: 20px;">  -  Xác định các dịch vụ cần tập trung hoặc loại bỏ để hỗ trợ các bộ phận trong iTVad phát triển kế hoạch triển khai.</p>
                    <p style="text-indent: 20px;">  -  Có khả năng đi công tác thường xuyên và dài ngày.</p>
                    <p style="text-indent: 20px;">  -  Thực hiện các báo cáo trực tiếp đối với Tổng Giám đốc và quản lý cấp cao.</p>

                    <p><strong>Các yêu cầu cho công việc</strong></p>
                    <p style="font-style: italic;"><strong> 1.  Kiến thức và kỹ năng chuyên môn:</strong></p>
                    <p style="text-indent: 20px;">Nắm vững kiến thức về ngành quảng cáo (đặc biệt đối với truyền hình và trực tuyến) và các hoạt động marketing trên thị trường.</p>

                    <p style="font-style: italic;"><strong>2.   Kinh nghiệm:</strong></p>
                    <p style="text-indent: 20px;">Tối thiểu 3 năm ở vị trí tương tự hoặc các vị trí có liên quan.</p>

                    <p style="font-style: italic;"><strong>3.   Trình độ:</strong></p>
                    <p style="text-indent: 20px;"> Cử nhân Đại học thuộc các ngành thuộc Kinh tế, chứng chỉ MBA là một lợi thế. Những chứng chỉ chuyên môn, kỹ thuật có liên quan đến ngành sẽ được ưu tiên.</p>

                    <p style="font-style: italic;"><strong> 4.  Kỹ năng vi tính/ công nghệ:</strong></p>
                    <p style="text-indent: 20px;">- Sử dụng tốt các chức năng, chương trình vi tính văn phòng.</p>
                    <p style="text-indent: 20px;">- Do đặc tính của dịch vụ, cần nhạy bén với các sản phẩm công nghệ và có khả năng học hỏi nhanh về công nghệ mới.</p>

                    <p style="font-style: italic;"><strong>5.   Kỹ năng Giao tiếp:</strong></p>
                    <p style="text-indent: 20px;">Có thể đưa ra chủ kiến và có khả năng thuyết phục trong môi trường làm việc nhóm. Giao tiếp tốt với các bộ phận vận hành; chăm sóc khách hàng; hạ tầng kỹ thuật; phát triển sản phẩm…</p>

                    <p style="font-style: italic;"><strong>6.	Kỹ năng Phân tích</strong></p>
                    <p style="text-indent: 20px;">- Khả năng phân tích tốt, có sức tập trung cao một cách chi tiết và chính xác.</p>
                    <p style="text-indent: 20px;">- Có khả năng tìm kiếm, thu thập hoặc xây dựng các hoạt động nghiên cứu, khảo sát.</p>
                    <p><strong>Quyền lợi</strong></p>
                    <p style="text-indent: 20px;">-    Mức lương và thu nhập cạnh tranh, được thương lượng và cam kết theo các chỉ số mục tiêu kinh doanh cụ thể.</p>
                    <p style="text-indent: 20px;">-    Chế độ khen thưởng và phúc lợi theo Luật lao động và Quy định của công ty.</p>

                    <p><strong>THÔNG TIN LIÊN HỆ</strong></p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;">Liên hệ:</div> Ms. Nguyễn Trịnh Đông Sương</p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;">Email:</div> suongntd@fpt.com.vn</p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;"> Điện thoại:</div> 08 7300 2222 (Ext: 8119)</p>

                </div>
            <?php endif;?>
            <?php if($recruit_cate=="sale" && $recruit_id == 2): ?>
                <div class="info-recruit">
                    <h1>Trưởng phòng Kinh doanh Miền Nam/ Miền Bắc</h1>
                    <p><img width="700" class="img-responsive center-block" src="<?php echo base_url()?>/assets/images/Recruitment/we-need-you.jpeg"></p>
                    <p style="font-style: italic;">(Làm việc tại TP. HCM hoặc Hà Nội)</p>
                    <p>Thị trường quảng cáo ở Việt Nam luôn có sự phát triển và tăng trưởng mạnh mẽ. Trong xu hướng “số hóa” ngành quảng cáo, iTVad là đơn vị đi đầu trong việc cung cấp giải pháp quảng cáo truyền hình trực tuyến. Dịch vụ của iTVad hướng tới việc phát huy tầm ảnh hưởng của quảng cáo truyền hình, đồng thời kết hợp với sự chính xác và khả năng tương tác của công nghệ trực tuyến.</p>
                    <p>Xác định đúng xu hướng và phát triển tập trung giúp cho iTVad có được sự phát triển nhanh chóng khi sở hữu một lượng lớn tài nguyên quảng cáo giá trị và đủ khả năng đáp ứng yêu cầu rộng khắp của các nhà quảng cáo, iTVad đang tìm kiếm 02 nhân sự cho vị trí Trưởng phòng Kinh doanh Miền Nam và Miền Bắc, giúp quản lý và dẫn dắt đội ngũ kinh doanh ở khu vực mình quản lý triển khai tốt kế hoạch kinh doanh và đạt các mục tiêu đề ra.</p>
                    <p><strong>Các chức năng của công việc</strong></p>
                    <p style="text-indent: 20px;">  -  Quản lý accounts và cung cấp tư vấn về chuyên môn để khách hàng có thể hiểu rõ và sử dụng dịch vụ của iTVad một cách hiệu quả.</p>
                    <p style="text-indent: 20px;">  -  Quản lý đội ngũ kinh doanh trong khu vực, theo dõi, đôn đốc việc triển khai các kế hoạch kinh doanh thuộc khu vực quản lý.</p>
                    <p style="text-indent: 20px;">  -  Giao tiếp tốt với khách hàng và những bộ phận khác trong iTVad để đảm quá công việc vận hành thông suốt.</p>
                    <p style="text-indent: 20px;">  -  Xác định rõ nhu cầu và cơ hội có thể áp dụng nhằm phát triển dịch vụ.</p>
                    <p style="text-indent: 20px;">  -  Tham gia xây dựng chiến lược sản phẩm.</p>
                    <p style="text-indent: 20px;">  -  Thực hiện các báo cáo trực tiếp đối với Giám đốc Kinh doanh.</p>


                    <p><strong>Các yêu cầu cho công việc</strong></p>
                    <p style="font-style: italic;"><strong> 1.  Kiến thức và kỹ năng chuyên môn:</strong></p>
                    <p style="text-indent: 20px;">Nắm vững kiến thức về ngành quảng cáo (đặc biệt đối với truyền hình và trực tuyến) và các hoạt động marketing trên thị trường.</p>

                    <p style="font-style: italic;"><strong>2.   Kinh nghiệm:</strong></p>
                    <p style="text-indent: 20px;">Tối thiểu 1 năm ở vị trí tương tự hoặc các vị trí có liên quan.</p>

                    <p style="font-style: italic;"><strong>3.   Trình độ:</strong></p>
                    <p style="text-indent: 20px;"> Cử nhân Đại học thuộc các ngành thuộc Kinh tế, chứng chỉ MBA là một lợi thế. Những chứng chỉ chuyên môn, kỹ thuật có liên quan đến ngành sẽ được ưu tiên.</p>

                    <p style="font-style: italic;"><strong> 4.  Kỹ năng vi tính/ công nghệ:</strong></p>
                    <p style="text-indent: 20px;">- Sử dụng tốt các chức năng, chương trình vi tính văn phòng.</p>
                    <p style="text-indent: 20px;">- Do đặc tính của dịch vụ, cần nhạy bén với các sản phẩm công nghệ và có khả năng học hỏi nhanh về công nghệ mới.</p>

                    <p style="font-style: italic;"><strong>5.   Kỹ năng Giao tiếp:</strong></p>
                    <p style="text-indent: 20px;">Có thể đưa ra chủ kiến và có khả năng thuyết phục trong môi trường làm việc nhóm. Giao tiếp tốt với các bộ phận vận hành; chăm sóc khách hàng; hạ tầng kỹ thuật; phát triển sản phẩm…</p>


                    <p><strong>Quyền lợi</strong></p>
                    <p style="text-indent: 20px;">-    Mức lương và thu nhập cạnh tranh, được thương lượng và cam kết theo các chỉ số mục tiêu kinh doanh cụ thể.</p>
                    <p style="text-indent: 20px;">-    Chế độ khen thưởng và phúc lợi theo Luật lao động và Quy định của công ty.</p>

                    <p><strong>THÔNG TIN LIÊN HỆ</strong></p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;">Liên hệ:</div> Ms. Nguyễn Trịnh Đông Sương</p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;">Email:</div> suongntd@fpt.com.vn</p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;"> Điện thoại:</div> 08 7300 2222 (Ext: 8119)</p>

                </div>
            <?php endif;?>
            <?php if($recruit_cate=="sale" && $recruit_id == 3): ?>
                <div class="info-recruit">
                    <h1>Nhân viên Kinh doanh Quảng cáo</h1>
                    <p><img width="700" class="img-responsive center-block" src="<?php echo base_url()?>/assets/images/Recruitment/we-need-you.jpeg"></p>
                    <p style="font-style: italic;">(Làm việc tại TP. HCM hoặc Hà Nội – 20 nhân sự)</p>
                    <p>Thị trường quảng cáo ở Việt Nam luôn có sự phát triển và tăng trưởng mạnh mẽ. Trong xu hướng “số hóa” ngành quảng cáo, iTVad là đơn vị đi đầu trong việc cung cấp giải pháp quảng cáo truyền hình trực tuyến. Dịch vụ của iTVad hướng tới việc phát huy tầm ảnh hưởng của quảng cáo truyền hình, đồng thời kết hợp với sự chính xác và khả năng tương tác của công nghệ trực tuyến.</p>

                    <p>Xác định đúng xu hướng và phát triển tập trung giúp cho iTVad có được sự phát triển nhanh chóng khi sở hữu một lượng lớn tài nguyên quảng cáo giá trị và đủ khả năng đáp ứng yêu cầu rộng khắp của các nhà quảng cáo, iTVad đang tìm kiếm 20 nhân sự cho vị trí Nhân viên Kinh doanh Quảng cáo.</p>

                    <p><strong>Mô tả chi tiết công việc</strong></p>
                    <p style="text-indent: 20px;">  -  Tìm kiếm và tiếp cận khách hàng tiềm năng để tư vấn về dịch vụ quảng cáo trên các sản phẩm của FPT Telecom.</p>
                    <p style="text-indent: 20px;">  -  Thu nhận thông tin phản hồi và chăm sóc khách hàng của mình hoặc được giao từ quản lý trực tiếp.</p>
                    <p style="text-indent: 20px;">  -  Phân tích khách hàng tiềm năng.</p>
                    <p style="text-indent: 20px;">  -  Lên hợp đồng, phối hợp với kế toán theo dõi công nợ của khách hàng.</p>
                    <p style="text-indent: 20px;">  -  Đảm bảo hoàn thành tốt chỉ tiêu bán hàng theo mục tiêu doanh số đề ra.</p>
                    <p style="text-indent: 20px;">  -  Phát triển mối quan hệ với khách hàng.</p>
                    <p style="text-indent: 20px;">  -  Phối hợp với bộ phận chiến lược và thiết kế hoàn thiện sản phẩm trước khi bàn giao cho khách hàng.</p>


                    <p><strong>Các yêu cầu cho công việc</strong></p>

                    <p style="text-indent: 20px;">- Tốt nghiệp Đại học chuyên ngành Marketing, Kinh tế, Quản trị kinh doan</p>

                    <p style="text-indent: 20px;">- Có khả năng làm việc trong môi trường áp lực cao.</p>

                    <p style="text-indent: 20px;">- Sáng tạo, nhiệt tình.</p>

                    <p style="text-indent: 20px;">- Có khả năng thuyết trình tốt, giao tiếp tốt.</p>
                    <p style="text-indent: 20px;">- Khả năng lập và triển khai kế hoạch tốt.</p>
                    <p style="text-indent: 20px;">- Anh Văn giao tiếp.</p>
                    <p style="text-indent: 20px;">- Thành thạo tin học văn phòng.</p>

                    <p><strong>Quyền lợi</strong></p>

                    <p style="text-indent: 20px;">- Mức lương và thu nhập hấp dẫn</p>
                    <p style="text-indent: 20px;">- Chế độ khen thưởng và phúc lợi phong phú</p>
                    <p style="text-indent: 20px;">- Môi trường làm việc thân thiện, chuyên nghiệp</p>
                    <p style="text-indent: 20px;">- Chế độ khen thưởng và phúc lợi phong phú</p>
                    <p style="text-indent: 20px;">- Các chế độ theo Luật lao động hiện hành và các phúc lợi theo quy định của Công ty (bảo hiểm FPT Care,…)</p>
                    <p><strong>THÔNG TIN LIÊN HỆ</strong></p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;">Liên hệ:</div> Ms. Nguyễn Trịnh Đông Sương</p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;">Email:</div> suongntd@fpt.com.vn</p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;"> Điện thoại:</div> 08 7300 2222 (Ext: 8119)</p>

                </div>
            <?php endif;?>
            <!--sản phẩm-->
            <?php if($recruit_cate=="product" && $recruit_id == 1): ?>
                <div class="info-recruit">
                    <h1>Chuyên viên Lập kế hoạch quảng cáo</h1>
                    <p><img width="700" class="img-responsive center-block" src="<?php echo base_url()?>/assets/images/Recruitment/we-need-you.jpeg"></p>
                    <p style="font-style: italic;">(Làm việc tại TP. HCM – 02 nhân sự)</p>
                    <p>Trong xu hướng “số hóa” ngành quảng cáo, iTVad là đơn vị đi đầu trong việc cung cấp giải pháp quảng cáo truyền hình trực tuyến. Dịch vụ của iTVad hướng tới việc phát huy tầm ảnh hưởng của quảng cáo truyền hình, đồng thời kết hợp với sự chính xác và khả năng tương tác của công nghệ trực tuyến.</p>
                    <p>Xác định đúng xu hướng và phát triển tập trung giúp cho iTVad có được sự phát triển nhanh chóng khi sở hữu một lượng lớn tài nguyên quảng cáo giá trị và đủ khả năng đáp ứng yêu cầu rộng khắp của các nhà quảng cáo, iTVad đang tìm kiếm nhân sự cho vị trí Chuyên viên Lập kế hoạch quảng cáo.</p>
                    <p><strong>Mô tả chi tiết công việc</strong></p>
                    <p style="text-indent: 20px;">  -  Gặp gỡ khách hàng cùng nhân viên kinh doanh để thấu hiểu mong muốn, nhu cầu trong các chiến dịch quảng cáo.</p>
                    <p style="text-indent: 20px;">  -  Tìm hiểu, thu thập thông tin và phân tích những thói quen, hành vi sử dụng các dịch vụ online.</p>
                    <p style="text-indent: 20px;">  -  Lập kế hoạch quảng cáo phù hợp với từng chiến dịch quảng cáo.</p>
                    <p style="text-indent: 20px;">  -  Tham gia trình bày kế hoạch và thuyết phục khách hàng.</p>
                    <p style="text-indent: 20px;">  -  Làm việc và tương tác thường xuyên với các bộ phận phát triển sản phẩm để thấu hiểu và đưa ra những phản hồi để hoàn thiện sản phẩm.</p>
                    <p style="text-indent: 20px;">  -  Thao tác và vận hành các hệ thống quảng cáo.</p>
                    <p style="text-indent: 20px;">  -  Tham gia xây dựng kế hoạch phát triển sản phẩm mới.</p>


                    <p><strong>Yêu cầu công việc</strong></p>

                    <p style="text-indent: 20px;"> - Tốt nghiệp Đại học chuyên ngành Marketing, Kinh tế, Quản trị kinh doanh.</p>

                    <p style="text-indent: 20px;"> - Có ít nhất 02 năm kinh nghiệm ở vị trí tương đương hoặc các vị trí có liên quan.</p>

                    <p style="text-indent: 20px;"> - Có khả năng làm việc trong môi trường áp lực cao.</p>

                    <p style="text-indent: 20px;"> - Có khả năng thuyết trình tốt, giao tiếp tốt.</p>
                    <p style="text-indent: 20px;"> - Khả năng đọc dữ liệu và phân tích vấn đề.</p>

                    <p style="text-indent: 20px;"> - Khả năng sáng tạo là một lợi thế.</p>

                    <p style="text-indent: 20px;"> - Anh Văn giao tiếp.</p>
                    <p style="text-indent: 20px;"> - Thành thạo tin học văn phòng, đặc biệt là Excel và Power Point</p>

                    <p><strong>Quyền lợi</strong></p>


                    <p style="text-indent: 20px;"> - Mức lương và thu nhập hấp dẫn</p>

                    <p style="text-indent: 20px;"> - Chế độ khen thưởng và phúc lợi phong phú</p>

                    <p style="text-indent: 20px;"> - Môi trường làm việc thân thiện, chuyên nghiệp</p>

                    <p style="text-indent: 20px;"> - Cơ hội đào tạo, phát triển và thăng tiến</p>

                    <p style="text-indent: 20px;"> - Các chế độ theo Luật lao động hiện hành và các phúc lợi theo quy định của Công ty (bảo hiểm FPT Care,…)</p>
                    <p><strong>THÔNG TIN LIÊN HỆ</strong></p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;">Liên hệ:</div> Ms. Nguyễn Trịnh Đông Sương</p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;">Email:</div> suongntd@fpt.com.vn</p>
                    <p style="text-indent: 20px;"><div style="float: left;width: 80px;"> Điện thoại:</div> 08 7300 2222 (Ext: 8119)</p>

                </div>
            <?php endif;?>
            <p><a href="<?php echo base_url(); ?>index.php/welcome/team" class=""><i class="fa fa-angle-left fa-fw fa-lg"></i> Quay về Trang chủ</a></p>
        </div>
    </div>
</section>