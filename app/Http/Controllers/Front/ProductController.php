<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\Factory;


class ProductController extends Controller
{
    public function detail($slug): View|Application|Factory
    {
        $product = [];
        switch ($slug){
            case 'whitening-remove-freckle-cream':
                $product = (object)[
                    'name' => 'SHINEX - Whitening Remove Freckle Cream',
                    'images' => [
                        'images/products/image_1_1.jpg',
                        'images/products/image_1_2.jpg',
                        'images/products/image_1_3.jpg',
                        'images/products/image_1_4.jpg',
                        'images/products/image_1_5.jpg',
                        'images/products/image_1_6.jpg',
                        'images/products/image_1_7.jpg',
                        'images/products/image_1_8.jpg',
                    ],
                    'description' => "Kem Whitening Remove Freckle Cream ShineX – Kem chống lão hóa chuyên sâu là dòng mỹ phẩm trị liệu cao cấp đến từ thương hiệu ShineX. Công thức độc quyền đẩy nhanh quá trình bóc tách, thay mới lớp tế bào sừng già cỗi, tái phục hồi làn da từ sâu bên trong.  đồng thời làm mờ ngăn chặn sự hình thành của các vết thâm, sạm, nám, xỉn màu  . Làn da sẽ được thay đổi ngoạn mục bất ngờ, đẩy lùi tất cả các dấu hiệu lão hóa và lấy lại làn da tươi trẻ tràn đầy sức sống.",
                    'content' => '<h3><strong>Th&agrave;nh phần v&agrave; c&ocirc;ng dụng sản phẩm:</strong></h3>
<p><strong>1. Th&agrave;nh phần ch&iacute;nh:</strong></p>
<ul>
<li><strong>Niacinamide</strong>: phức hợp của vtmB3 l&agrave; hoạt chất c&oacute; t&aacute;c dụng điều trị c&aacute;c vấn đề về l&atilde;o h&oacute;a. Hoạt động l&agrave;m giảm sự sản sinh của melanin từ đ&oacute; c&oacute; thể hỗ trợ ngăn chặn h&igrave;nh th&agrave;nh c&aacute;c vết th&acirc;m, sạm da hiệu quả. Chống oxy h&oacute;a, duy tr&igrave; độ ẩm v&agrave; tang sinh ceramide gi&uacute;p củng cổ h&agrave;ng r&agrave;o bảo vệ tự nhi&ecirc;n tr&ecirc;n da. l&agrave;m giảm tho&aacute;t nước l&ecirc;n đến 24%. Từ đ&oacute; Điều tiết b&atilde; nhờn&nbsp; khiến lỗ ch&acirc;n l&ocirc;ng trở n&ecirc;n th&ocirc;ng tho&aacute;ng hơn.</li>
<li><strong>Ascobic acid:</strong> Vtm C dạng ổn định gi&uacute;p chống lại qu&aacute; tr&igrave;nh oxy h&oacute;a tự nhi&ecirc;n mạnh mẽ. Ngăn chặn v&agrave; l&agrave;m giảm sự h&igrave;nh th&agrave;nh c&aacute;c vết th&acirc;m sạm, n&aacute;m. Bảo vệ da trước c&aacute;c t&aacute;c nh&acirc;n g&acirc;y hại ngo&agrave;i m&ocirc;i trường. L&agrave;n da s&aacute;ng khỏe v&agrave; đồng đ&ecirc;u m&agrave;u.</li>
<li><strong>Glycyrrhiza Glabra (Licorice) Root Extract:</strong> l&agrave; chiết xuất từ rễ c&acirc;y cam thảo được sử dụng rất phổ biến trong c&aacute;c b&agrave;i thuốc Đ&ocirc;ng Y, c&oacute; chứa glabridin &ndash; c&oacute; đặc t&iacute;nh l&agrave;m s&aacute;ng da, c&oacute; t&aacute;c dụng ức chế sản sinh melanin tương đương hydroquinone nhưng an to&agrave;n v&agrave; hiệu quả hơn rất nhiều. Glabridin c&ograve;n l&agrave; chất chống oxy h&oacute;a v&agrave; chống vi&ecirc;m ngo&agrave;i ra hỗ trợ l&agrave;m dịu, l&agrave;m l&agrave;nh c&aacute;c vết thương nhanh ch&oacute;ng.</li>
<li><strong>Chiết xuất rễ c&acirc;y mẫu đơn: </strong>chống oxy h&oacute;a v&agrave; bảo vệ da khỏi c&aacute;c gốc tự do.</li>
</ul>
<p><strong>2. C&ocirc;ng dụng ch&iacute;nh:</strong></p>
<ul>
<li>L&agrave;m s&aacute;ng da, l&agrave;m mờ v&agrave; ngăn ngừa vết th&acirc;m, n&aacute;m mảng, t&agrave;n nh&agrave;ng.</li>
<li>Thay mới, t&aacute;i tạo v&agrave; trẻ h&oacute;a l&agrave;n da đang gặp c&aacute;c t&igrave;nh trạng th&ocirc;, sần, lỗ ch&acirc;n l&ocirc;ng to.</li>
<li>Điều chỉnh c&aacute;c sắc tố v&agrave; ngăn ngừa c&aacute;c đốm n&acirc;u mới h&igrave;nh th&agrave;nh</li>
</ul>
<p><strong>3. Chỉ định</strong></p>
<ul>
<li>Da sần s&ugrave;i, lỗ ch&acirc;n l&ocirc;ng to</li>
<li>Da kh&ocirc; xỉn m&agrave;u, thiếu rạng rỡ</li>
<li>Da c&oacute; vấn đề về sắc tố</li>
</ul>
<p><strong>4. C&aacute;ch d&ugrave;ng:</strong></p>
<p>Thoa đều sản phẩm sau khi l&agrave;m sạch da v&agrave;o buổi tối, tr&aacute;nh v&ugrave;ng mắt, m&aacute;t xa đến khi sản phẩm được thẩm thấu ho&agrave;n to&agrave;n.</p>'
                ];
                break;
            case 'repair-anti-aging-cream':
                $product = (object)[
                    'name' => 'SHINEX - Repair Anti-Aging Cream',
                    'images' => [
                        'images/products/image_1_1.jpg',
                        'images/products/image_1_2.jpg',
                        'images/products/image_1_3.jpg',
                        'images/products/image_1_4.jpg',
                        'images/products/image_1_5.jpg',
                        'images/products/image_1_6.jpg',
                        'images/products/image_1_7.jpg',
                        'images/products/image_1_8.jpg',
                    ],
                    'description' => "Kem dưỡng trắng trị thâm mờ nám là dòng sản phẩm cao cấp trong việc hỗ trợ điều trị các vấn đề về sắc tố, giúp loại bỏ các vùng da tối màu, thâm sạm. đây là sản phẩm vô cùng hiệu quả trong việc ngăn ngừa sự xuất hiện của các vết thâm và hiện tượng da không đều màu. Thành phần chiết xuất tự nhiên an toàn lành tính, bổ sung các dưỡng chất cần thiết cho da, giúp duy trì làn da tươi sáng đầy sức sống",
                    'content' => '<h3><strong>Th&agrave;nh phần v&agrave; c&ocirc;ng dụng sản phẩm:</strong></h3>
<p><strong>1. Th&agrave;nh phần ch&iacute;nh:</strong></p>
<ul>
<li>
<p><strong>PALMITIC ACID:</strong> l&agrave; 1 acid b&eacute;o tự nhi&ecirc;n c&oacute; tr&ecirc;n da gi&uacute;p giữ ẩm v&agrave; củng cố h&agrave;ng r&agrave;o bảo vệ da.</p>
</li>
<li>
<p><strong>Glycolic </strong>l&agrave; một alpha hydroxy acid (AHA) được sử dụng rộng r&atilde;i để&nbsp;chống l&atilde;o h&oacute;a, tăng sắc tố, kh&ocirc; da v&agrave; mụn trứng c&aacute;. Được coi l&agrave; ti&ecirc;u chuẩn v&agrave;ng của AHA, đặc t&iacute;nh ti&ecirc;u sừng của glycolic acid gi&uacute;p tẩy tế b&agrave;o chết tr&ecirc;n bề mặt da, l&agrave;m giảm c&aacute;c nếp nhăn &ndash; r&atilde;nh nhăn hiện c&oacute;, l&agrave;m mờ vết th&acirc;m n&aacute;m v&agrave; x&oacute;a mụn.</p>
</li>
<li>
<p><strong>HYDROXYPHENYL PROPAMIDOBENZOIC ACID: </strong>l&agrave;m dịu kh&aacute;ng vi&ecirc;m, chống k&iacute;ch ứng. ( c&oacute; khả năng &nbsp;tương tự như&nbsp;<a href="https://en.wikipedia.org/wiki/Avenanthramide">Avenanthraimide</a>&nbsp;c&oacute; tự nhi&ecirc;n trong yến mạch)</p>
</li>
<li>
<p><strong>Th&agrave;nh phần Glycyrrhetinic Acid</strong>( chiết xuất c&acirc;y cam thảo) c&oacute; c&ocirc;ng dụng l&agrave;m giảm kh&ocirc; da, bong tr&oacute;c da. Đồng thời c&oacute; thể nu&ocirc;i dưỡng v&agrave;&nbsp;<a href="https://nhathuoclongchau.com.vn/bai-viet/meo-phuc-hoi-da-bi-hu-ton-tai-nha-nhanh-chong-hieu-qua-48564.html">phục hồi da hư tổn</a>. C&ograve;n c&oacute; thể l&agrave;m trắng da, thiết lập lại cấu tr&uacute;c da bị tổn thương. V&igrave; vậy gi&uacute;p da tr&ocirc;ng trẻ hơn v&agrave; đ&agrave;n hồi tốt hơn.</p>
</li>
</ul>
<p><strong>2. C&ocirc;ng dụng ch&iacute;nh:</strong></p>
<ul>
<li>
<p>Th&uacute;c đẩy qu&aacute; tr&igrave;nh trao đổi chất của l&agrave;n da 1 c&aacute;ch mạnh mẽ.</p>
</li>
<li>
<p>L&agrave;m chậm qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a, chống lại sự xuất hiện của c&aacute;c nếp nhăn.</p>
</li>
<li>
<p>Nu&ocirc;i dưỡng v&agrave; l&agrave;m s&aacute;ng đồng đều l&agrave;n da.</p>
</li>
</ul>
<p><strong>3. Chỉ định</strong></p>
<ul>
<li>Da sần s&ugrave;i, lỗ ch&acirc;n l&ocirc;ng to</li>
<li>Da kh&ocirc; xỉn m&agrave;u, thiếu rạng rỡ</li>
<li>Da c&oacute; vấn đề về sắc tố</li>
</ul>
<p><strong>4. C&aacute;ch d&ugrave;ng:</strong></p>
<p>Thoa đều sản phẩm sau khi l&agrave;m sạch da v&agrave;o buổi tối, tr&aacute;nh v&ugrave;ng mắt, m&aacute;t xa đến khi sản phẩm được thẩm thấu ho&agrave;n to&agrave;n.</p>'];
                break;
            case 'soothing-balance-repair-cream':
                $product = (object)[
                    'name' => 'SHINEX - Soothing balance repair cream',
                    'images' => [
                        'images/products/image_1_1.jpg',
                        'images/products/image_1_2.jpg',
                        'images/products/image_1_3.jpg',
                        'images/products/image_1_4.jpg',
                        'images/products/image_1_5.jpg',
                        'images/products/image_1_6.jpg',
                        'images/products/image_1_7.jpg',
                        'images/products/image_1_8.jpg',
                    ],
                    'description' => "Smoothing balance repair cream là giải pháp cấp cứu cho làn da bị tổn thương, phục hồi và khôi phục cấu trúc hàng rào bảo vệ da. Kem dưỡng là sự kết hợp hoàn hảo giữa các thành phần chiết xuất thiên nhiên làm dịu tức thời, thẩm thấu nhanh và giúp nuôi dưỡng, cung cấp độ ẩm cần thiết cho da, làm giảm các cảm giác kích ứng khó chịu. Mang lại 1 làn da cân bằng và khỏe mạnh.",
                    'content' => '<h3><strong>Th&agrave;nh phần v&agrave; c&ocirc;ng dụng sản phẩm:</strong></h3>
<p><strong>1. Th&agrave;nh phần ch&iacute;nh:</strong></p>
<ul>
<li>
<p><strong>Beta glucan</strong> c&oacute; t&aacute;c dụng h&uacute;t ẩm rất tốt, n&oacute; c&oacute; khả năng tăng lượng nước s&acirc;u b&ecirc;n trong da. Đồng thời hoạt chất n&agrave;y cũng c&oacute; khả năng giữ nước tốt hơn do với chất <a href="https://nhathuoclongchau.com.vn/bai-viet/top-10-serum-hyaluronic-acid-duong-am-hieu-qua-cho-da-49254.html">Hyaluronic Acid</a>&nbsp;với nồng độ tương đương. Chống oxy h&oacute;a v&agrave; bảo vệ da trước t&aacute;c động của m&ocirc;i trường</p>
</li>
<li>
<p><strong>Chiết xuất c&acirc;y Trắc B&aacute; Diệp: </strong>c&oacute; khả năng chống oxy h&oacute;a mạnh mẽ m&agrave; kh&ocirc;ng g&acirc;y k&iacute;ch ứng, kh&aacute;ng vi&ecirc;m l&agrave;m dịu nhanh c&aacute;c t&igrave;nh trạng da đang vi&ecirc;m dị ứng.</p>
</li>
</ul>
<p><strong>2. C&ocirc;ng dụng ch&iacute;nh:</strong></p>
<ul>
<li>
<p>Th&uacute;c đẩy qu&aacute; tr&igrave;nh trao đổi chất của l&agrave;n da 1 c&aacute;ch mạnh mẽ.</p>
</li>
<li>
<p>L&agrave;m chậm qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a, chống lại sự xuất hiện của c&aacute;c nếp nhăn.</p>
</li>
<li>
<p>Nu&ocirc;i dưỡng v&agrave; l&agrave;m s&aacute;ng đồng đều l&agrave;n da.</p>
</li>
</ul>
<p><strong>3. Chỉ định</strong></p>
<ul>
<li>
<p>Mọi loại da</p>
</li>
<li>
<p>Đặc biệt da dầu, lỗ ch&acirc;n l&ocirc;ng to</p>
</li>
<li>
<p>Da nhạy cảm</p>
</li>
<li>
<p>Da sau điều trị x&acirc;m lấn.</p>
</li>
</ul>
<p><strong>4. C&aacute;ch d&ugrave;ng:</strong></p>
<p>Thoa đều sản phẩm sau khi l&agrave;m sạch da v&agrave;o buổi tối, tr&aacute;nh v&ugrave;ng mắt, m&aacute;t xa đến khi sản phẩm được thẩm thấu ho&agrave;n to&agrave;n.</p>'
                ];
                break;
            case 'soothing-and-restoring-essential-oils':
                $product = (object)[
                    'name' => 'SHINEX - Serum smoothing and restoring essential oils',
                    'images' => [
                        'images/products/image_1_1.jpg',
                        'images/products/image_1_2.jpg',
                        'images/products/image_1_3.jpg',
                        'images/products/image_1_4.jpg',
                        'images/products/image_1_5.jpg',
                        'images/products/image_1_6.jpg',
                        'images/products/image_1_7.jpg',
                        'images/products/image_1_8.jpg',
                    ],
                    'description' => "Serum cấu trúc là tinh chất làm dịu và phục hồi chuyên sâu, tái tạo tang cường dưỡng chất để đem lại các nét tươi trẻ cho làn da. Lấp đầy các nếp nhăn li ti, tăng độ săn chắc, đàn hồi cho da. Duy trì tính toàn vẹn của cấu trúc da. Kết cấu lỏng nhẹ thẩm thấu nhanh chóng, giúp da được phục hồi ở cấp độ tế bào và đem lại hiệu quả tức thì",
                    'content' => '<h3><strong>Th&agrave;nh phần v&agrave; c&ocirc;ng dụng sản phẩm:</strong></h3>
<p><strong>1. Th&agrave;nh phần ch&iacute;nh:</strong></p>
<ul>
<li>
<p><strong>Chiết xuất rễ c&acirc;y mẫu đơn:</strong> chống oxy h&oacute;a v&agrave; bảo vệ da khỏi c&aacute;c gốc tự do.</p>
</li>
<li>
<p><strong>Chiết xuất rễ c&acirc;y cam thảo:</strong> chống vi&ecirc;m ngo&agrave;i ra hỗ trợ l&agrave;m dịu, l&agrave;m l&agrave;nh c&aacute;c vết thương nhanh ch&oacute;ng.</p>
</li>
<li>
<p><strong>Beta glucan, glycerin:</strong> c&aacute;c hoạt chất giữ nước, cấp ẩm tức th&igrave; gi&uacute;p da căng b&oacute;ng ngậm nước.</p>
</li>
</ul>
<p><strong>2. C&ocirc;ng dụng ch&iacute;nh:</strong></p>
<ul>
<li>
<p>Th&uacute;c đẩy qu&aacute; tr&igrave;nh trao đổi chất của l&agrave;n da 1 c&aacute;ch mạnh mẽ.</p>
</li>
<li>
<p>L&agrave;m chậm qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a, chống lại sự xuất hiện của c&aacute;c nếp nhăn.</p>
</li>
<li>
<p>Nu&ocirc;i dưỡng v&agrave; l&agrave;m s&aacute;ng đồng đều l&agrave;n da.</p>
</li>
</ul>
<p><strong>3. Chỉ định</strong></p>
<ul>
<li>
<p>Mọi loại da</p>
</li>
<li>
<p>Da sau điều trị x&acirc;m lấn.</p>
</li>
</ul>
<p><strong>4. C&aacute;ch d&ugrave;ng:</strong></p>
<p>Sau bước l&agrave;m sạch v&agrave; c&acirc;n bằng da, lấy 1 lượng nhỏ vừa đủ tinh chất thoa đều l&ecirc;n da v&agrave; massa nhẹ nh&agrave;ng, đợi tinh chất thẩm thấu tr&ecirc;n da từ 2-3 ph&uacute;t sau đ&oacute; tiếp tục b&ocirc;i them 1 lớp kem dưỡng để bảo to&agrave;n giữ tinh chất tr&ecirc;n da.</p>'
                ];
                break;
            case 'repairing-active-white-serum':
                $product = (object)[
                    'name' => 'SHINEX - Repairing active white serum',
                    'images' => [
                        'images/products/image_1_1.jpg',
                        'images/products/image_1_2.jpg',
                        'images/products/image_1_3.jpg',
                        'images/products/image_1_4.jpg',
                        'images/products/image_1_5.jpg',
                        'images/products/image_1_6.jpg',
                        'images/products/image_1_7.jpg',
                        'images/products/image_1_8.jpg',
                    ],
                    'description' => "Các đặc tính làm sáng vượt trội có trong Repairing active white serum ShineX được kết hợp bởi Công nghệ làm sáng tiên phong cùng các hoạt chất vàng trong điều trị và ức chế sắc tố. mang lại một làn da trắng sứ hoàn hảo và giúp da được hoạt động trang trạng thái tốt nhất. Dòng sản phẩm cao cấp có tác dụng xuất sắc trong việc điều chỉnh cơ chế sản sinh melanin dưới da, giảm sự xuất hiện của các đốm đen và các vết sạm màu, giúp da được dưỡng ẩm sâu và hồi sinh.",
                    'content' => '<h3><strong>Th&agrave;nh phần v&agrave; c&ocirc;ng dụng sản phẩm:</strong></h3>
<p><strong>1. Th&agrave;nh phần ch&iacute;nh:</strong></p>
<ul>
<li>
<p><strong>Niacinamide: </strong>phức hợp của vtmB3 l&agrave; hoạt chất c&oacute; t&aacute;c dụng điều trị c&aacute;c vấn đề về l&atilde;o h&oacute;a. Hoạt động l&agrave;m giảm sự sản sinh của melanin từ đ&oacute; c&oacute; thể hỗ trợ ngăn chặn h&igrave;nh th&agrave;nh c&aacute;c vết th&acirc;m, sạm da hiệu quả. Chống oxy h&oacute;a, duy tr&igrave; độ ẩm v&agrave; tang sinh ceramide gi&uacute;p củng cổ h&agrave;ng r&agrave;o bảo vệ tự nhi&ecirc;n tr&ecirc;n da. l&agrave;m giảm tho&aacute;t nước l&ecirc;n đến 24%. Từ đ&oacute; Điều tiết b&atilde; nhờn&nbsp; khiến lỗ ch&acirc;n l&ocirc;ng trở n&ecirc;n th&ocirc;ng tho&aacute;ng hơn</p>
</li>
<li>
<p><strong>Tranexamic acid: </strong>hoạt động bằng c&aacute;ch ngăn chặn sự di chuyển từ tế b&agrave;o hắc tố l&ecirc;n tế b&agrave;o sừng tr&ecirc;n bề mặt da, từ đ&oacute; gi&uacute;p l&agrave;m s&aacute;ng c&aacute;c v&ugrave;ng da bị sạm m&agrave;u v&agrave; n&aacute;m da. ranexamic acid cũng đem lại khả năng l&agrave;m dịu da v&agrave; kh&ocirc;i phục h&agrave;ng r&agrave;o bảo vệ.</p>
</li>
<li>
<p><strong>Glutathione: </strong>chống oxy h&oacute;a mạnh, n&oacute; hỗ trợ trung h&ograve;a c&aacute;c gốc tự do được h&igrave;nh th&agrave;nh do tiếp x&uacute;c mạnh với bức xạ tia cực t&iacute;m v&agrave; c&aacute;c chất &ocirc; nhiễm m&ocirc;i trường. ức chế hoạt động của enzym tyrosinase, dưỡng s&aacute;ng da hiệu quả.</p>
</li>
</ul>
<p><strong>2. C&ocirc;ng dụng ch&iacute;nh:</strong></p>
<ul>
<li>
<p>Th&uacute;c đẩy qu&aacute; tr&igrave;nh trao đổi chất của l&agrave;n da 1 c&aacute;ch mạnh mẽ.</p>
</li>
<li>
<p>L&agrave;m chậm qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a, chống lại sự xuất hiện của c&aacute;c nếp nhăn.</p>
</li>
<li>
<p>Nu&ocirc;i dưỡng v&agrave; l&agrave;m s&aacute;ng đồng đều l&agrave;n da.</p>
</li>
</ul>
<p><strong>3. Chỉ định</strong></p>
<ul>
<li>
<p>Mọi loại da</p>
</li>
<li>
<p>Da sau điều trị x&acirc;m lấn.</p>
</li>
</ul>
<p><strong>4. C&aacute;ch d&ugrave;ng:</strong></p>
<p>Sau bước l&agrave;m sạch v&agrave; c&acirc;n bằng da, lấy 1 lượng nhỏ vừa đủ tinh chất thoa đều l&ecirc;n da v&agrave; massa nhẹ nh&agrave;ng, đợi tinh chất thẩm thấu tr&ecirc;n da từ 2-3 ph&uacute;t sau đ&oacute; tiếp tục b&ocirc;i them 1 lớp kem dưỡng để bảo to&agrave;n giữ tinh chất tr&ecirc;n da.</p>'
                ];
                break;
            case 'polypeptide-heal-damaged-skin-ice-crystal':
                $product = (object)[
                    'name' => 'SHINEX Polypeptide',
                    'images' => [
                        'images/products/image_1_1.jpg',
                        'images/products/image_1_2.jpg',
                        'images/products/image_1_3.jpg',
                        'images/products/image_1_4.jpg',
                        'images/products/image_1_5.jpg',
                        'images/products/image_1_6.jpg',
                        'images/products/image_1_7.jpg',
                        'images/products/image_1_8.jpg',
                    ],
                    'description' => "Tinh chất phục hồi cấu trúc da toàn diện Polypeptide SHINEX được thiết kế là dòng sản phẩm chuyên biệt xử lý các tình trạng da sau can thiệp phẫu thuật. đặc biệt là các làn da cần được phục hồi, tái tạo nhanh chóng như da sau các liệu pháp laser, lăn lim, mesotherapy.. Polypeptides gồm các phân tử nhỏ thẩm thấu sâu vào bên trong ở cấp độ tế bào. Làn da sẽ hình thành một hàng rào bảo vệ vững chãi ngăn ngừa sự xuất hiện của các dấu hiệu lão hóa, tái tạo với tốc độ nhanh hơn rất nhiều lần so với thông thường. Polypeptides hoạt động giúp tạo ra các protein mà chúng lại tạo nền tảng thúc đẩy sản sinh collagen. Hơn nữa sản phẩm  cũng có tác dụng kháng khuẩn và làm dịu da mụn nhanh chóng. Do đó, Polipeptit hỗ trợ làm giảm viêm sưng, mẩn đỏ và ngăn ngừa mụn quay trở lại. Kết hợp tuyệt vời giữa các thành phần giữ ẩm và tạo lớp màng bảo vệ che chắn bề mặt da có chiết xuất thiên nhiên  nên độ lành tính cực kỳ cao giúp chống đỡ và tái sinh làn da tổn thương ở cấp độ tế bào.",
                    'content' => '<h3><strong>Th&agrave;nh phần v&agrave; c&ocirc;ng dụng sản phẩm:</strong></h3>
<p><strong>1. Th&agrave;nh phần ch&iacute;nh:</strong></p>
<ul>
<li>
<p><strong>Tocopheryl acetate( vtmE):</strong>&nbsp;Bảo vệ da v&agrave; giữ ẩm cho l&agrave;n da mịn m&agrave;ng, kh&ocirc;ng bong tr&oacute;c nứt nẻ.<br />chiết xuất c&acirc;y hoa hồng leo: chống oxy h&oacute;a v&agrave; cấp nước cho da.</p>
</li>
<li>
<p><strong>Bơ hạt mỡ:</strong> Giữ ẩm v&agrave; tr&aacute;nh tho&aacute;t nước từ dưới da, bảo vệ da 1 c&aacute;ch tốt nhất khỏi c&aacute;c t&aacute;c nh&acirc;n g&acirc;y hại ngo&agrave;i m&ocirc;i trường.</p>
</li>
<li>
<p><strong>Palmitoyl tetrapeptide-7</strong> l&agrave; một loại hợp chất peptide tổng hợp từ một số chuỗi axit amin. N&oacute; c&oacute; t&aacute;c dụng giảm vi&ecirc;m da v&agrave; tổn thương da đi k&egrave;m. Hợp chất peptide n&agrave;y cũng được cho l&agrave; k&iacute;ch th&iacute;ch sự t&aacute;i tạo c&aacute;c sợi collagen trong lớp hạ b&igrave;. Palmitoyl tetrapeptide-7 cũng được cho l&agrave; l&agrave;m tăng lượng axit hyaluronic trong da gi&uacute;p . Từ đ&oacute; gi&uacute;p l&agrave;m săn chắc da bằng c&aacute;ch giữ ẩm cho lớp biểu b&igrave;.&nbsp;</p>
</li>
</ul>
<p><strong>2. C&ocirc;ng dụng ch&iacute;nh:</strong></p>
<ul>
<li>
<p>Th&uacute;c đẩy qu&aacute; tr&igrave;nh trao đổi chất của l&agrave;n da 1 c&aacute;ch mạnh mẽ.</p>
</li>
<li>
<p>L&agrave;m chậm qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a, chống lại sự xuất hiện của c&aacute;c nếp nhăn.</p>
</li>
<li>
<p>Nu&ocirc;i dưỡng v&agrave; l&agrave;m s&aacute;ng đồng đều l&agrave;n da.</p>
</li>
</ul>
<p><strong>3. Chỉ định</strong></p>
<ul>
<li>
<p>Mọi loại da</p>
</li>
<li>
<p>Da sau điều trị x&acirc;m lấn.</p>
</li>
</ul>
<p><strong>4. C&aacute;ch d&ugrave;ng:</strong></p>
<p>Lấy 1 lượng nhỏ tinh chất thoa đều l&ecirc;n v&ugrave;ng da điều trị v&agrave; masssa nhẹ nh&agrave;ng, đợi kem thẩm thấu rồi tiếp tục b&ocirc;i l&ecirc;n tr&ecirc;n 1 lớp kem dưỡng mỏng để giữ tinh chất tr&ecirc;n da. Dung ng&agrave;y 2 lần s&aacute;ng tối để c&oacute; hiệu quả tốt nhất.</p>'
                ];
                break;
            default:
                break;
        }
        return view('front.content.product.productDetail',['product' => $product, 'page' =>  'product-detail']);
    }
}
