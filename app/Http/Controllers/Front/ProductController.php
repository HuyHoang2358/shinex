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
        $repair_anti_aging_cream = (object)[
            'name' => 'Repair Anti-Aging Cream',
            'slug' => 'repair-anti-aging-cream',
            'title' => 'Kem dưỡng phục hồi chống lão hoá',
            'components' => [
                (object)[
                    "name" => 'Tocopherol acetate',
                    'title' => 'Có tác dụng chống oxy hóa tốt, là chất tự nhiên tan
                                         trong dầu, là chất dưỡng ẩm tốt cho da. Rất hiệu
                                         quả trong việc giữ ẩm và duy trì mô liên kết, cũng
                                         như bảo vệ da khỏi tia UV. Thành phần này làm cho
                                         da mềm mại và giữ được độ ẩm, thúc đẩy quá trình
                                         lành vết thương, ngăn ngừa viêm nhiễm, ngăn ngừa
                                         da thô ráp và nứt nẻ, đồng thời cải thiện các vết
                                         thâm.',
                    'image' => '/images/components/tocopherol-acetate.png'
                ],
                (object)[
                    "name" => 'Sữa ong chúa',
                    'title' => 'Sữa ong chúa là chất tiết ra từ tuyến hầu của ong thợ
                                         non nuôi ấu trùng trong tổ, là thức ăn cho ấu trùng
                                        thứ sẽ trở thành ong chúa, tương đương với sữa của
                                         động vật có vú, nên sữa ong chúa còn được gọi là sữa
                                         ong. Sữa ong chúa có tác dụng chống lão hoá da, có
                                         tác dụng rõ rệt đối với các đốm màu vàng sẫm, đốm
                                         màu, và nếp nhăn. Nó có tác dụng phục hồi mạnh mẽ
                                         và làm dịu các mô nhạy cảm.',
                    'image' => '/images/components/sua-ong-chua.png'
                ],
                (object)[
                    "name" => 'Lactobacillus/ sữa đậu nành lên men',
                    'title' => ' Lactococcus Ferment Lysate rất giàu axit lactic và natri lactate, đây là
                                         axit hòa tan trong nước chính trong thành phần giữ ẩm tự nhiên của
                                         con người (NMF). Nó có khả năng hút ẩm mạnh mẽ, tăng cường hiệu
                                         quả quá trình hydrat hóa của lớp biểu bì và ngăn ngừa mất nước cho
                                         da. Axit lactic và natri lactate tạo thành dung dịch đệm, có ái lực tốt với
                                         da và có thể điều chỉnh độ pH của da. Lactococcus Ferment Lysate
                                         chứa axit amin, peptide nhỏ, polysacarit, vitamin B và các thành phần
                                         có lợi khác để chăm sóc da, có thể tăng cường quá trình trao đổi chất
                                         của lớp sừng, loại bỏ các gốc tự do của tế bào, ức chế quá trình
                                         peroxid hóa lipid, tăng hiệu suất phục hồi của cơ thể, ức chế hoạt động
                                         tyrosinase của tế bào và có chức năng phục hồi, làm trắng và chống
                                         oxy hóa',
                    'image' => '/images/components/lactobacillus.png'
                ],
                (object)[
                    "name" => 'Citric acid',
                    'title' => 'Axit citric được chiết xuất từ chanh và là một trong những axit
                                         trái cây. Trong mỹ phẩm, nó chủ yếu được sử dụng làm chất
                                         chelat, chất đệm, chất điều chỉnh axit và bazơ, đồng thời cũng
                                         có thể được sử dụng làm chất bảo quản tự nhiên, là một chất
                                         tuần hoàn quan trọng trong cơ thể con người. Nó có thể tăng
                                         tốc độ tái tạo keratin, làm bong hắc tố, se khít lỗ chân lông,
                                         loại bỏ mụn đầu đen. Trên da, nó có thể đóng vai trò dưỡng
                                         ẩm, làm trắng da, cải thiện các đốm đen, thô ráp và các tình
                                         trạng khác trên da.',
                    'image' => '/images/components/citric-acid.png'
                ]
            ],
            'numbers' => [
                (object)[
                    'image' =>'images/products/image_1_1.jpg',
                    'title' => 'Nuôi dưỡng, làm trắng từ sâu bên trong',
                    'content' => 'Giúp cải thiện quá trình trao đổi chất của da, làm sáng tông màu da, cải thiện tình trạng da xỉn màu.'
                ],
                (object)[
                    'image' => 'images/products/image_1_2.jpg',
                    'title' => 'Phục hồi làn da từ bên ngoài, mang lại làn da căng bóng đầy sức sống.',
                    'content' => 'Chứa các thành phần phục hồi từ thực vật, làm giảm các đốm tàn nhang, làm dịu da và dưỡng ẩm'
                ],
            ],
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
            'assigns' => [
                (object)[
                    "title" => 'Da sần sùi, lỗ chân lông to',
                    "image" => '/images/assigns/da-mat-san-sui-lo-chan-long-to.jpg',
                    "content" => 'Da mặt sần sùi lỗ chân lông to là tình trạng nhiều người gặp phải. Tình trạng này xảy ra khi da mất độ ẩm, bong tróc vảy và thô ráp. Khi da sần sùi thì khá nhạy cảm dễ bị kích ứng hoặc nổi mụn.',
                ],
                (object)[
                    "title" => 'Da khô xỉn màu, thiếu rạng rỡ',
                    "image" => '/images/assigns/da-kho-xin-mau.webp',
                    "content" => 'Da xỉn màu là làn da không đều màu, thô ráp, tông màu da bị tối hoặc nhợt nhạt, không được tươi sáng. Ngoài ra, người có da xỉn màu kém sức sống thường có lỗ chân lông da khá to, thậm chí có cả nếp nhăn, sạm nám, đốm đen',
                ],
                (object)[
                    "title" => 'Da có vấn đề về sắc tố',
                    "image" => '/images/assigns/roi-loan-sac-to-da.jpg',
                    "content" => 'Tình trạng khiến da bị sạm đen được gọi là chứng tăng sắc tố da. Đó có thể là những mảng nhỏ, bao phủ với khu vực da lớn hoặc có thể ảnh hưởng đến toàn bộ cơ thể. Tăng sắc tố da thường vô hại nhưng đây có thể là triệu chứng của một tình trạng sức khỏe nào đó khác.',
                ],
            ],
            'description' => "Kem dưỡng trắng trị thâm mờ nám là dòng sản phẩm cao cấp trong việc hỗ trợ điều trị các vấn đề về sắc tố, giúp loại bỏ các vùng da tối màu, thâm sạm. đây là sản phẩm vô cùng hiệu quả trong việc ngăn ngừa sự xuất hiện của các vết thâm và hiện tượng da không đều màu. Thành phần chiết xuất tự nhiên an toàn lành tính, bổ sung các dưỡng chất cần thiết cho da, giúp duy trì làn da tươi sáng đầy sức sống",
        ];
        $whitening_remove_freckle_cream = (object)[
            'name' => 'Whitening Remove Freckle Cream',
            'slug' => 'whitening-remove-freckle-cream',
            'title' => 'Kem dưỡng sáng da mờ thâm nám tàn nhang',
            'components' => [
                (object)[
                    "name" => ' Squalane',
                    'title' => 'Squalane được chiết xuất từ gan cá mập hoặc dầu ô
                                 liu, là thành phần tự nhiên của da, có khả năng
                                 chống oxy hóa tốt và thúc đẩy miễn dịch, có thể hòa
                                 tan nhanh cùng với độ ẩm và dầu trong da, tạo
                                 thành hàng rào bảo vệ da tự nhiên, có độ ổn định
                                 tốt, không bị oxy hóa bởi không khí, tia cực tím..., có
                                 thể bảo vệ da hiệu quả khỏi các chất bên ngoài, và
                                 có khả năng thẩm thấu tốt. Nó có thể điều chỉnh sự
                                 cân bằng của nước và dầu trên da, ngăn ngừa da
                                 thô ráp và xỉn màu, đồng thời mang lại sự mềm mại
                                 ban đầu của da. Đặc biệt thích hợp sử dụng vào
                                 mùa lạnh, nó là “dầu bôi trơn” cho da và có thể bổ
                                 sung lượng bã nhờn tự nhiên của da.',
                    'image' => '/images/components/dau-squalane.jpg'
                ],
                (object)[
                    "name" => 'Chiết xuất rễ nhân sâm',
                    'title' => 'Nhân sâm được mệnh danh là “vua của các loại thảo dược” và
                                 hiệu quả về nhiều mặt của nó đang được chứng minh rất nhiều.
                                 Đối với da, nhân sâm có chứa ginsenosides, có thể thúc đẩy
                                 tuần hoàn máu, ngăn ngừa lão hóa da và nếp nhăn, tăng cường
                                 cung cấp dưỡng chất cho da, đóng vai trò bổ khí và nuôi dưỡng
                                 làn da và thúc đẩy lưu thông máu, đồng thời tăng cường chức
                                 năng miễn dịch, giúp da không bị kích thích có hại từ môi
                                 trường bên ngoài. Nó có thể đẩy nhanh quá trình trao đổi chất
                                 của con người, dưỡng ẩm sâu cho da, ngăn ngừa khô và lão hóa,
                                 đồng thời điều trị ngứa và lột da hiệu quả, mang lại làn da mặt
                                 mỏng manh và mịn màng. Mang lại làn da tinh khiết và trắng
                                 sáng.',
                    'image' => '/images/components/re-nhan-sam.webp'
                ],
                (object)[
                    "name" => 'Tocopherol (Vitamin E)',
                    'title' => ' Vitamin E là một chất chống oxy hóa, hòa tan trong chất
                                 béo, giúp làm sạch các gốc tự do được tạo ra bởi bức xạ
                                 mặt trời, như tia cực tím và ngăn ngừa tổn thương của
                                 chúng đối với da. Các gốc tự do có thể oxy hóa tế bào da,
                                 dẫn đến các vấn đề như lão hóa da, nếp nhăn và đốm nâu.
                                 Vitamin E có thể trung hòa các chất có hại này và bảo vệ
                                 tế bào da.',
                    'image' => '/images/components/tocopherol-acetate.png'
                ],
                (object)[
                    "name" => 'Chiết xuất hoa tuyết liên',
                    'title' => 'Hoa tuyết liên tự nhiên chứa nhiều flavonatella, olipin,
                                 polysaccharide.... Chỉ số chống nắng lên đến 22SPF, có thể bảo
                                 vệ da hiệu quả khỏi tia cực tím, đồng thời có tác dụng chống
                                 viêm, phục hồi mô và chống gốc tự do superoxide, có ý nghĩa
                                 tích cực trong việc ngăn ngừa tổn thương tiến triển mãn tính do
                                 các yếu tố sinh lý hoặc phi sinh lý (chẳng hạn như bệnh tật) gây
                                 ra. Nó có chức năng giữ ẩm, khử trùng, chống viêm, phát triển
                                 lớp mô dưới da, chống nắng, làm mềm, làm mịn, làm trắng, loại
                                 bỏ tàn nhang và chống lão hóa.',
                    'image' => '/images/components/hoa-tuyet-lien.jpg'
                ],

            ],
            'numbers' => [
                (object)[
                    'image' =>'images/products/image_1_1.jpg',
                    'title' => 'Nuôi dưỡng, làm trắng từ sâu bên trong',
                    'content' => ' Làm mờ các đốm nâu trên da, tấn công chuyên sâu các đốm nâu trên da.'
                ],
                (object)[
                    'image' => 'images/products/image_1_2.jpg',
                    'title' => 'Giảm sắc tố melanin và giúp làn da trắng sáng. Ngăn ngừa các sắc tố không mong muốn.',
                    'content' => 'Chứa các thành phần phục hồi từ thực vật, làm giảm các đốm tàn nhang, làm dịu da và dưỡng ẩm'
                ],
                (object)[
                    'image' => 'images/products/image_1_2.jpg',
                    'title' => 'Giảm sắc tố melanin và giúp làn da trắng sáng. Ngăn ngừa các sắc tố không mong muốn.',
                    'content' => 'Giảm các đốm tàn nhang và ngăn ngừa tái phát'
                ],
            ],
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
            'assigns' => [
                (object)[
                    "title" => 'Da sần sùi, lỗ chân lông to',
                    "image" => '/images/assigns/da-mat-san-sui-lo-chan-long-to.jpg',
                    "content" => 'Da mặt sần sùi lỗ chân lông to là tình trạng nhiều người gặp phải. Tình trạng này xảy ra khi da mất độ ẩm, bong tróc vảy và thô ráp. Khi da sần sùi thì khá nhạy cảm dễ bị kích ứng hoặc nổi mụn.',
                ],
                (object)[
                    "title" => 'Da khô xỉn màu, thiếu rạng rỡ',
                    "image" => '/images/assigns/da-kho-xin-mau.webp',
                    "content" => 'Da xỉn màu là làn da không đều màu, thô ráp, tông màu da bị tối hoặc nhợt nhạt, không được tươi sáng. Ngoài ra, người có da xỉn màu kém sức sống thường có lỗ chân lông da khá to, thậm chí có cả nếp nhăn, sạm nám, đốm đen',
                ],
                (object)[
                    "title" => 'Da có vấn đề về sắc tố',
                    "image" => '/images/assigns/roi-loan-sac-to-da.jpg',
                    "content" => 'Tình trạng khiến da bị sạm đen được gọi là chứng tăng sắc tố da. Đó có thể là những mảng nhỏ, bao phủ với khu vực da lớn hoặc có thể ảnh hưởng đến toàn bộ cơ thể. Tăng sắc tố da thường vô hại nhưng đây có thể là triệu chứng của một tình trạng sức khỏe nào đó khác.',
                ],
            ],
            'description' => " Làm mờ các đốm nâu trên da, tấn công chuyên sâu các đốm nâu trên da. Giảm sắc tố melanin và giúp làn da trắng sáng. Ngăn ngừa các sắc tố không mong muốn. Giảm các đốm tàn nhang và ngăn ngừa tái phát.",
        ];


        $relatedProducts = [
            $repair_anti_aging_cream,
            $whitening_remove_freckle_cream,
            $repair_anti_aging_cream,
            $repair_anti_aging_cream,
            $repair_anti_aging_cream,
            $repair_anti_aging_cream
        ];

        $product = [];
        switch ($slug){
            case 'whitening-remove-freckle-cream':
                $product = $whitening_remove_freckle_cream;
                break;
            case 'repair-anti-aging-cream':
                $product = $repair_anti_aging_cream;
                break;
            case 'soothing-balance-repair-cream':
                $product = (object)[
                    'name' => 'Soothing balance repair cream',
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
                    'name' => 'Serum smoothing and restoring essential oils',
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
                return view('front.content.notFound');
                break;
        }
        return view('front.content.product.productDetail',['product' => $product, 'relatedProducts' =>  $relatedProducts]);
    }
}
