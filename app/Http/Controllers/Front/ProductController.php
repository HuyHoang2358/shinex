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
                    'image' => "images/products/repair-anti-aging-cream/4.jpg",
                    'title' => 'Nuôi dưỡng, làm trắng từ sâu bên trong',
                    'content' => 'Giúp cải thiện quá trình trao đổi chất của da, làm sáng tông màu da, cải thiện tình trạng da xỉn màu.'
                ],
                (object)[
                    'image' => "images/products/repair-anti-aging-cream/2.jpg",
                    'title' => 'Phục hồi làn da từ bên ngoài, mang lại làn da căng bóng đầy sức sống.',
                    'content' => 'Chứa các thành phần phục hồi từ thực vật, làm giảm các đốm tàn nhang, làm dịu da và dưỡng ẩm'
                ],
            ],
            'images' => [
                "images/products/repair-anti-aging-cream/1.jpg",
                "images/products/repair-anti-aging-cream/2.jpg",
                "images/products/repair-anti-aging-cream/3.jpg",
                "images/products/repair-anti-aging-cream/4.jpg",
                "images/products/repair-anti-aging-cream/5.jpg",
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
                    'image' => 'images/products/whitening-remove-freckle-cream/1.jpg',
                    'title' => 'Nuôi dưỡng, làm trắng từ sâu bên trong',
                    'content' => 'Dưỡng chất thấm sâu, cải thiện sắc tố da từ bên trong. Tăng cường nuôi dưỡng, mang lại làn da trắng sáng tự nhiên.'
                ],
                (object)[
                    'image' =>  'images/products/whitening-remove-freckle-cream/2.jpg',
                    'title' => 'Ngăn chặn hình thành các sắc tố không mong muốn, giữ da luôn rạng rỡ.',
                    'content' => 'Giảm sắc tố melanin và giúp làn da trắng sáng. Ngăn ngừa các sắc tố không mong muốn.'
                ],
                (object)[
                    'image' =>  'images/products/whitening-remove-freckle-cream/3.jpg',
                    'title' => 'Giảm các đốm tàn nhang và ngăn ngừa tái phát',
                    'content' => 'Giảm hiệu quả các đốm tàn nhang, mang lại làn da đều màu. Ngăn ngừa tàn nhang tái phát, duy trì làn da mịn màng.'
                ],
            ],
            'images' => [
                'images/products/whitening-remove-freckle-cream/1.jpg',
                'images/products/whitening-remove-freckle-cream/2.jpg',
                'images/products/whitening-remove-freckle-cream/3.jpg',
                'images/products/whitening-remove-freckle-cream/4.jpg',
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

        $soothing_balance_repair_cream = (object)[
            'name' => 'Soothing Balance Repair Cream',
            'slug' => 'soothing-balance-repair-cream',
            'title' => 'Kem phục hồi cân bằng làm dịu da',
            'components' => [
                (object)[
                    "name" => 'Trehalose',
                    'title' => 'Là chất giữ ẩm phân tử nhỏ, tăng cường chức
                                 năng hydrat hóa của tế bào, có đặc tính giữ ẩm
                                 tốt trong điều trị da khô do tăng vảy, khô nóng.
                                 Keratinosclerosis có tác dụng đặc biệt. Tác dụng
                                 bảo vệ, tránh làm khô tế bào ức chế sản xuất
                                 TNF-a, một trong những cytokine gây viêm, có tác
                                 dụng chống viêm và ức chế tình trạng da thô ráp.',
                    'image' => '/images/components/trehalose.webp'
                ],
                (object)[
                    "name" => 'Chiết xuất rễ cây Mẫu đơn',
                    'title' => ' Rễ của cây mẫu đơn giòn và mọng nước, giàu axit
                                 benzoin, là một chất an thần và bảo quản tự nhiên
                                 với tác dụng làm dịu và chống viêm, làm mờ các
                                 đốm nâu, cải thiện làn da thô ráp, thúc đẩy quá
                                 trình trao đổi chất, cải thiện khả năng miễn dịch của
                                 da và các tác dụng khác, ức chế mụn trứng cá trên
                                 mặt và làm chậm quá trình lão hóa da',
                    'image' => '/images/components/re-cay-mau-don.jpg'
                ],
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
                    "name" => 'β-glucan',
                    'title' => 'Polysaccharide có hoạt tính cao và có thể được hấp
                                 thụ nhanh chóng ở trạng thái mô phỏng của da
                                 người, cho thấy glucan tác dụng ngay lập tức trên
                                 tế bào người, giúp da khóa và trữ nước, đồng thời
                                 cải thiện độ ẩm cho da. Beta-glucan được sử dụng
                                 trên da để cải thiện quá trình tổng hợp collagen và
                                 cellulose, cung cấp nhiều yếu tố tăng trưởng tế
                                 bào, loại bỏ nếp nhăn và giảm tình trạng mẫn cảm.',
                    'image' => '/images/components/beta-glucan.jpg'
                ],

            ],
            'numbers' => [
                (object)[
                    'image' => 'images/products/soothing-balance-repair-cream/1.jpg',
                    'title' => 'Công thức dưỡng ẩm dịu nhẹ',
                    'content' => 'Chứa nhiều thành phần từ thực vật, có thể làm dịu da, giảm bớt sự khó chịu cho da.'
                ],
                (object)[
                    'image' =>  'images/products/soothing-balance-repair-cream/2.jpg',
                    'title' => 'Phục hồi da tổn thương',
                    'content' => 'Nhanh chóng thẩm thấu vào sâu trong da, phục hồi làn da vốn đã bị tổn thương, giảm hiện tượng khô ngứa và châm chích.'
                ],
                (object)[
                    'image' =>  'images/products/soothing-balance-repair-cream/3.jpg',
                    'title' => 'Tăng cường hàng rào bảo vệ da',
                    'content' => ' Các chất chống viêm từ thực vật đa dạng trong phân phối các thành phần dưỡng ẩm có thể cải thiện các vấn đề về da từ sâu bên trong, tăng cường lớp mô dưới da, khôi phục hàng rào da khỏe mạnh'
                ],
            ],
            'images' => [
                'images/products/soothing-balance-repair-cream/1.jpg',
                'images/products/soothing-balance-repair-cream/2.jpg',
                'images/products/soothing-balance-repair-cream/3.jpg',
                'images/products/soothing-balance-repair-cream/4.jpg',
                'images/products/soothing-balance-repair-cream/5.jpg',

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
            'description' => "Smoothing balance repair cream là giải pháp cấp cứu cho làn da bị tổn thương, phục hồi và khôi phục cấu trúc hàng rào bảo vệ da. Kem dưỡng là sự kết hợp hoàn hảo giữa các thành phần chiết xuất thiên nhiên làm dịu tức thời, thẩm thấu nhanh và giúp nuôi dưỡng, cung cấp độ ẩm cần thiết cho da, làm giảm các cảm giác kích ứng khó chịu. Mang lại 1 làn da cân bằng và khỏe mạnh",
        ];

        $soothing_and_restoring_essential_oils = (object)[
            'name' => 'Smoothing and restoring essential oils',
            'slug' => 'soothing-and-restoring-essential-oils',
            'title' => 'Tinh dầu làm dịu và phục hồi da',
            'components' => [
                (object)[
                    "name" => 'Chiết xuất hoa cúc',
                    'title' => ' Hoa cúc có tác dụng làm dịu đáng kể, có thể điều trị
                                 các vết bỏng nhẹ, mụn nước, vết thương viêm
                                 nhiễm, giúp cải thiện bệnh viêm da cơ địa, mụn rộp
                                 và da nhạy cảm, là sản phẩm thanh lọc da rất tốt.',
                    'image' => '/images/components/hoa-cuc.jpg'
                ],
                (object)[
                    "name" => 'Chiết xuất rễ cây Mẫu đơn',
                    'title' => ' Rễ của cây mẫu đơn giòn và mọng nước, giàu axit
                                 benzoin, là một chất an thần và bảo quản tự
                                 nhiên với tác dụng làm dịu và chống viêm, làm mờ
                                 các đốm nâu, cải thiện làn da thô ráp, thúc đẩy
                                 quá trình trao đổi chất, cải thiện khả năng miễn
                                 dịch của da và các tác dụng khác',
                    'image' => '/images/components/re-cay-mau-don.jpg'
                ],
                (object)[
                    "name" => ' Chiết xuất cam thảo',
                    'title' => 'Chiết xuất cam thảo có hiệu quả rất lớn. Nó có thể
                                 làm mềm và dịu da, làm dịu làn da bị tổn thương và
                                 nhạy cảm, cải thiện khả năng tự phục hồi của da,
                                 giúp da trắng sáng hơn. Flavonoid trong cam thảo
                                một hợp chất được chiết xuất từ cam thảo, có rất
                                 nhiều tác dụng trong mỹ phẩm làm đẹp. Nó có tác
                                 dụng chống viêm, chống dị ứng và có thể ức chế
                                 tính thấm của mạch máu.',
                    'image' => '/images/components/cam-thao.jpg'
                ],

            ],
            'numbers' => [
                (object)[
                    'image' =>'images/products/soothing-and-restoring-essential-oils/1.jpg',
                    'title' => 'Phục hồi da tổn thương',
                    'content' => 'Phục hồi tế bào biểu bì, hàng rào bã nhờn biểu bì da khỏe mạnh, tăng cường sức đề kháng cho da.'
                ],
                (object)[
                    'image' => 'images/products/soothing-and-restoring-essential-oils/2.jpg',
                    'title' => 'Phục hồi tế bảo lớp hạt',
                    'content' => 'Phục hồi các tế bào lớp hạt, cải thiện tốc độ hấp thụ của da và duy trì hàm lượng nước của tế bào da.'
                ],
                (object)[
                    'image' => 'images/products/soothing-and-restoring-essential-oils/3.jpg',
                    'title' => 'Phục hồi tế bào acanthate',
                    'content' => 'Phục hồi các tế bào acanthate, đẩy nhanh quá trình vận chuyển chất dinh dưỡng và nước của tế bào, và đẩy nhanh quá trình vi tuần hoàn giữa các tế bào.'
                ],
                (object)[
                    'image' => 'images/products/soothing-and-restoring-essential-oils/4.jpg',
                    'title' => 'Phục hồi tế bào cơ bản',
                    'content' => ' Phục hồi các tế bào cơ bản, thúc đẩy sự phân chia và tái tạo nhanh chóng của nguyên bào sợi, đẩy nhanh quá trình trao đổi chất.'
                ],
            ],
            'images' => [
                'images/products/soothing-and-restoring-essential-oils/1.jpg',
                'images/products/soothing-and-restoring-essential-oils/2.jpg',
                'images/products/soothing-and-restoring-essential-oils/3.jpg',
                'images/products/soothing-and-restoring-essential-oils/4.jpg',
            ],
            'assigns' => [
                (object)[
                    "title" => 'Mọi loại da đặc biệt da mất nước',
                    "image" => '/images/assigns/da-mat-san-sui-lo-chan-long-to.jpg',
                    "content" => 'Da mặt sần sùi lỗ chân lông to là tình trạng nhiều người gặp phải. Tình trạng này xảy ra khi da mất độ ẩm, bong tróc vảy và thô ráp. Khi da sần sùi thì khá nhạy cảm dễ bị kích ứng hoặc nổi mụn.',
                ],
                (object)[
                    "title" => 'Da chùng nhão, thô ráp',
                    "image" => '/images/assigns/da-kho-xin-mau.webp',
                    "content" => 'Da xỉn màu là làn da không đều màu, thô ráp, tông màu da bị tối hoặc nhợt nhạt, không được tươi sáng. Ngoài ra, người có da xỉn màu kém sức sống thường có lỗ chân lông da khá to, thậm chí có cả nếp nhăn, sạm nám, đốm đen',
                ],
                (object)[
                    "title" => 'Da sau các liệu trình xâm lấn.',
                    "image" => '/images/assigns/roi-loan-sac-to-da.jpg',
                    "content" => 'Tình trạng khiến da bị sạm đen được gọi là chứng tăng sắc tố da. Đó có thể là những mảng nhỏ, bao phủ với khu vực da lớn hoặc có thể ảnh hưởng đến toàn bộ cơ thể. Tăng sắc tố da thường vô hại nhưng đây có thể là triệu chứng của một tình trạng sức khỏe nào đó khác.',
                ],
            ],
            'description' => "Serum cấu trúc là tinh chất làm dịu và phục hồi chuyên sâu, tái tạo tang cường dưỡng chất để đem lại các nét tươi trẻ cho làn da. Lấp đầy các nếp nhăn li ti, tăng độ săn chắc, đàn hồi cho da. Duy trì tính toàn vẹn của cấu trúc da. Kết cấu lỏng nhẹ thẩm thấu nhanh chóng, giúp da được phục hồi ở cấp độ tế bào và đem lại hiệu quả tức thì",
        ];

        $repairing_active_white_serum = (object)[
            'name' => 'Repairing active white serum',
            'slug' => 'repairing-active-white-serum',
            'title' => 'Tinh chất phục hồi Active White',
            'components' => [
                (object)[
                    "name" => 'Niacinamide',
                    'title' => 'Niacinamide có tác dụng tốt trong việc ức chế sắc
                                 tố melanin, chống viêm, đẩy nhanh quá trình trao
                                 đổi chất của tế bào, đẩy nhanh quá trình bong ra
                                 các tế bào sừng melanin, duy trì hàm lượng nước
                                 cho da và thúc đẩy vi tuần hoàn ở da',
                    'image' => '/images/components/niacinamide.png'
                ],
                (object)[
                    "name" => 'Nước ép Nho',
                    'title' => 'Flavonoid có trong nho là chất chống oxy hóa
                                 mạnh, chống lão hóa và có thể loại bỏ các gốc tự
                                 do trong cơ thể, tăng độ đàn hồi cho da, giảm nếp
                                 nhăn, tàn nhang, làm trắng da, và có tác dụng
                                 dưỡng ẩm',
                    'image' => '/images/components/flavonoid.jpg'
                ],
                (object)[
                    "name" => 'Thrombotic acid',
                    'title' => 'Axit thrombotic, còn được gọi là axit tranaming, là
                                 một chất ức chế protease, có thể ức chế hoạt động
                                 xúc tác của protease trong quá trình thủy phân
                                 liên kết peptide, do đó ngăn chặn hoạt động của
                                 các enzyme như protease gây viêm, sau đó ức chế
                                 chức năng của các tế bào biểu bì tại vị trí các đốm
                                 nâu, và ức chế nhóm yếu tố tăng cường melanin,
                                 sau đó cắt đứt hoàn toàn con đường sản sinh
                                 melanin được hình thành do chiếu tia cực tím.',
                    'image' => '/images/components/thrombotic-acid.png'
                ],
                (object)[
                    "name" => 'Glutathione',
                    'title' => ' Glutathione có khả năng chống oxy hóa rộng và có
                                 thể được sử dụng trong chăm sóc da chống lão
                                 hóa. Nó có tác dụng làm trắng da, chống sạm da,
                                 điều hòa da và dưỡng ẩm hiệu quả.',
                    'image' => '/images/components/glutathione.jpg'
                ],

            ],
            'numbers' => [
                (object)[
                    'image' => 'images/products/repairing-active-white-serum/4.jpg',
                    'title' => 'Làm sáng da',
                    'content' => ' Kết hợp nhiều thành phần làm trắng có nguồn gốc từ thực vật để giảm sắc tố và làm sáng da từ trong ra ngoài.'
                ],
                (object)[
                    'image' =>  'images/products/repairing-active-white-serum/2.jpg',
                    'title' => 'Ba lớp đốm sáng',
                    'content' => 'Lợi dụng khả năng thẩm thấu thân thiện với da của các thành phần làm trắng để thẩm thấu vào mô dưới da 240 micron để làm mờ các đốm nâu.'
                ],
                (object)[
                    'image' =>  'images/products/repairing-active-white-serum/3.jpg',
                    'title' => 'Kiểm soát đốm nâu',
                    'content' => 'Nhiều loại dưỡng chất tác động lên da, liên tục nuôi dưỡng và làm trắng da.'
                ],
                (object)[
                    'image' =>  'images/products/repairing-active-white-serum/4.jpg',
                    'title' => 'Phục hồi tế bào cơ bản',
                    'content' => ' Phục hồi các tế bào cơ bản, thúc đẩy sự phân chia và tái tạo nhanh chóng của nguyên bào sợi, đẩy nhanh quá trình trao đổi chất.'
                ],
            ],
            'images' => [
                'images/products/repairing-active-white-serum/1.jpg',
                'images/products/repairing-active-white-serum/2.jpg',
                'images/products/repairing-active-white-serum/3.jpg',
                'images/products/repairing-active-white-serum/4.jpg',

            ],
            'assigns' => [
                (object)[
                    "title" => 'Mọi loại da đặc biệt da mất nước',
                    "image" => '/images/assigns/da-mat-san-sui-lo-chan-long-to.jpg',
                    "content" => 'Da mặt sần sùi lỗ chân lông to là tình trạng nhiều người gặp phải. Tình trạng này xảy ra khi da mất độ ẩm, bong tróc vảy và thô ráp. Khi da sần sùi thì khá nhạy cảm dễ bị kích ứng hoặc nổi mụn.',
                ],
                (object)[
                    "title" => 'Da chùng nhão, thô ráp',
                    "image" => '/images/assigns/da-kho-xin-mau.webp',
                    "content" => 'Da xỉn màu là làn da không đều màu, thô ráp, tông màu da bị tối hoặc nhợt nhạt, không được tươi sáng. Ngoài ra, người có da xỉn màu kém sức sống thường có lỗ chân lông da khá to, thậm chí có cả nếp nhăn, sạm nám, đốm đen',
                ],
                (object)[
                    "title" => 'Da sau các liệu trình xâm lấn.',
                    "image" => '/images/assigns/roi-loan-sac-to-da.jpg',
                    "content" => 'Tình trạng khiến da bị sạm đen được gọi là chứng tăng sắc tố da. Đó có thể là những mảng nhỏ, bao phủ với khu vực da lớn hoặc có thể ảnh hưởng đến toàn bộ cơ thể. Tăng sắc tố da thường vô hại nhưng đây có thể là triệu chứng của một tình trạng sức khỏe nào đó khác.',
                ],
            ],
            'description' => "Các đặc tính làm sáng vượt trội có trong Repairing active white serum ShineX được kết hợp bởi Công nghệ làm sáng tiên phong cùng các hoạt chất vàng trong điều trị và ức chế sắc tố. mang lại một làn da trắng sứ hoàn hảo và giúp da được hoạt động trang trạng thái tốt nhất. Dòng sản phẩm cao cấp có tác dụng xuất sắc trong việc điều chỉnh cơ chế sản sinh melanin dưới da, giảm sự xuất hiện của các đốm đen và các vết sạm màu, giúp da được dưỡng ẩm sâu và hồi sinh.",
        ];

        $polypeptide_heal_damaged_skin_ice_crystal = (object)[
        'name' => 'Polypeptide Heal damaged skin Ice crystal',
        'slug' => 'polypeptide-heal-damaged-skin-ice-crystal',
        'title' => 'Làm dịu và phục hồi da',
        'components' => [
            (object)[
                "name" => 'Red myrrh alcohol',
                'title' => 'Nhựa thơm Myrrh đỏ chiết xuất từ cây hoa cúc có
                         tác dụng chống viêm, kháng khuẩn. Thành phần có
                         độ ổn định tốt, khả năng tương thích tốt với da,
                         giảm viêm da, giảm mụn trên da, ngăn ngừa mụn
                         trứng cá, tăng khả năng chống kích ứng của da,
                         phục hồi tình trạng viêm và da bị thương, và có
                         trong các sản phẩm chống nắng giúp nâng cao chỉ
                         số SPF',
                'image' => '/images/components/red-myrrh-alcohol.jpg'
            ],
            (object)[
                "name" => 'Chiết xuất rễ gừng',
                'title' => 'Chiết xuất gừng có tác dụng ức chế nhất định
                             đối với dermatophyton, Streptococcus albicans
                             và vi khuẩn đường miệng, nhưng tác dụng ức
                             chế nấm mốc thông thường là không tốt. Nó có
                             thể tăng cường hoạt động của da, kích thích da
                             tái tạo và có tác dụng chống oxy hóa và chống
                             lão hóa.',
                'image' => '/images/components/chiet-xuat-gung-thien-nhien.jpg'
            ],
            (object)[
                "name" => 'Palmitoyl tetrapeptide-7',
                'title' => ' Palmitoyl tetrapeptide-7 làm săn chắc da
                             bằng cách kích thích collagen laminin IV và
                             VII, giảm sản xuất interleukin-6, giảm viêm,
                             ngăn ngừa tổn thương và ngăn ngừa nếp
                             nhăn, tình trạng chảy xệ, và da không đều
                             màu.',
                'image' => '/images/components/palmitoyl-tetrapeptide-7.webp'
            ],

        ],
        'numbers' => [
            (object)[
                'image' =>'images/products/polypeptide-heal-damaged-skin-ice-crystal/2.jpg',
                'title' => 'Chăm sóc toàn diện cho làn da',
                'content' => 'Loại bỏ tình trạng ngứa ran, mẩn đỏ, khô, ngứa, rát da. Chăm sóc toàn diện cho làn da bị tổn thương.'
            ],
            (object)[
                'image' => 'images/products/polypeptide-heal-damaged-skin-ice-crystal/3.jpg',
                'title' => 'Phục hồi da sau các can thiệp phẫu thuật',
                'content' => ' Làm dịu da, giảm tình trạng đỏ sau khi tiếp xúc với ánh nắng mặt trời. Phục hồi da sau khi xăm hoặc có vết thương.  ',
            ],
            (object)[
                'image' => 'images/products/polypeptide-heal-damaged-skin-ice-crystal/4.jpg',
                'title' => 'Bổ sung dưỡng chất',
                'content' => 'Bổ sung keratin, làm dày da, cải thiện tình trạng da mỏng lộ mao mạch. Nuôi dưỡng và phục hồi mô dưới da'
            ],
        ],
        'images' => [
            'images/products/polypeptide-heal-damaged-skin-ice-crystal/1.jpg',
            'images/products/polypeptide-heal-damaged-skin-ice-crystal/2.jpg',
            'images/products/polypeptide-heal-damaged-skin-ice-crystal/3.jpg',
            'images/products/polypeptide-heal-damaged-skin-ice-crystal/4.jpg',
            'images/products/polypeptide-heal-damaged-skin-ice-crystal/5.jpg',
            'images/products/polypeptide-heal-damaged-skin-ice-crystal/6.jpg',
        ],
        'assigns' => [
            (object)[
                "title" => 'Mọi loại da đặc biệt da mất nước',
                "image" => '/images/assigns/da-mat-san-sui-lo-chan-long-to.jpg',
                "content" => 'Da mặt sần sùi lỗ chân lông to là tình trạng nhiều người gặp phải. Tình trạng này xảy ra khi da mất độ ẩm, bong tróc vảy và thô ráp. Khi da sần sùi thì khá nhạy cảm dễ bị kích ứng hoặc nổi mụn.',
            ],
            (object)[
                "title" => 'Da chùng nhão, thô ráp',
                "image" => '/images/assigns/da-kho-xin-mau.webp',
                "content" => 'Da xỉn màu là làn da không đều màu, thô ráp, tông màu da bị tối hoặc nhợt nhạt, không được tươi sáng. Ngoài ra, người có da xỉn màu kém sức sống thường có lỗ chân lông da khá to, thậm chí có cả nếp nhăn, sạm nám, đốm đen',
            ],
            (object)[
                "title" => 'Da sau các liệu trình xâm lấn.',
                "image" => '/images/assigns/roi-loan-sac-to-da.jpg',
                "content" => 'Tình trạng khiến da bị sạm đen được gọi là chứng tăng sắc tố da. Đó có thể là những mảng nhỏ, bao phủ với khu vực da lớn hoặc có thể ảnh hưởng đến toàn bộ cơ thể. Tăng sắc tố da thường vô hại nhưng đây có thể là triệu chứng của một tình trạng sức khỏe nào đó khác.',
            ],
        ],
        'description' => "Tinh chất phục hồi cấu trúc da toàn diện Polypeptide SHINEX được thiết kế là dòng sản phẩm chuyên biệt xử lý các tình trạng da sau can thiệp phẫu thuật. đặc biệt là các làn da cần được phục hồi, tái tạo nhanh chóng như da sau các liệu pháp laser, lăn lim, mesotherapy.. Polypeptides gồm các phân tử nhỏ thẩm thấu sâu vào bên trong ở cấp độ tế bào. Làn da sẽ hình thành một hàng rào bảo vệ vững chãi ngăn ngừa sự xuất hiện của các dấu hiệu lão hóa, tái tạo với tốc độ nhanh hơn rất nhiều lần so với thông thường. Polypeptides hoạt động giúp tạo ra các protein mà chúng lại tạo nền tảng thúc đẩy sản sinh collagen. Hơn nữa sản phẩm  cũng có tác dụng kháng khuẩn và làm dịu da mụn nhanh chóng. Do đó, Polipeptit hỗ trợ làm giảm viêm sưng, mẩn đỏ và ngăn ngừa mụn quay trở lại. Kết hợp tuyệt vời giữa các thành phần giữ ẩm và tạo lớp màng bảo vệ che chắn bề mặt da có chiết xuất thiên nhiên  nên độ lành tính cực kỳ cao giúp chống đỡ và tái sinh làn da tổn thương ở cấp độ tế bào."
    ];

        $relatedProducts = [
            $repair_anti_aging_cream,
            $whitening_remove_freckle_cream,
            $soothing_balance_repair_cream,
            $soothing_and_restoring_essential_oils,
            $repairing_active_white_serum,
            $polypeptide_heal_damaged_skin_ice_crystal
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
                $product = $soothing_balance_repair_cream;
                break;
            case 'soothing-and-restoring-essential-oils':
                $product = $soothing_and_restoring_essential_oils;
                break;
            case 'repairing-active-white-serum':
                $product = $repairing_active_white_serum;
                break;
            case 'polypeptide-heal-damaged-skin-ice-crystal':
                $product = $polypeptide_heal_damaged_skin_ice_crystal;
                break;
            default:
                return view('front.content.notFound');
                break;
        }
        return view('front.content.product.productDetail',['product' => $product, 'relatedProducts' =>  $relatedProducts]);
    }
}
