<?php
session_start();
if (!isset($_SESSION['log']) || $_SESSION['log'] != 'User') {
    header('Location: login.php?etat=3');
    exit;
}
ob_start();
?>


Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur distinctio dolore dolor ut officia maxime, beatae, suscipit aspernatur repudiandae ipsum delectus vel cumque quisquam sapiente provident eos perferendis temporibus quo?
Sint veritatis dolorum aliquam iure est odit culpa molestias accusamus, obcaecati consectetur eveniet deserunt in atque provident rem quisquam, eius cupiditate nulla eaque non nesciunt impedit explicabo rerum labore? Inventore.
Modi beatae vero velit a quaerat debitis explicabo ipsam dolore eaque laudantium. Fugiat libero voluptatum vel sed cupiditate. Officia eligendi id, expedita est harum enim voluptatem doloremque ipsa dolor fugiat?
Minima asperiores dolorum necessitatibus tenetur accusamus provident obcaecati voluptas iusto, repellendus doloribus, quaerat vero sequi, ipsum reprehenderit velit nesciunt nam quod iste nobis perferendis harum nostrum! Odio ullam aliquam aspernatur?
Consectetur vero possimus odit, labore consequuntur maxime provident eum dignissimos, laborum beatae a unde ex error fugit adipisci qui? Repellendus quos facilis repellat saepe neque repudiandae esse suscipit dolore totam?
In blanditiis ullam recusandae consequuntur, nemo laborum atque quam voluptate asperiores vel ipsam qui sapiente harum, totam assumenda corporis sint? Deleniti quaerat, repellendus labore est dolorem in vitae! Eligendi, optio.
Amet quae adipisci sunt repellendus. Temporibus eaque modi corporis aliquid dicta distinctio dolor? Eius adipisci aliquid enim ad blanditiis. Odit amet architecto ratione recusandae voluptates consectetur blanditiis sapiente laboriosam dolorum!
Quas quod dolorem adipisci at sint totam odit quaerat incidunt repellendus? Ipsum cupiditate adipisci impedit, perferendis repudiandae exercitationem distinctio sint ea odio placeat, veritatis iure magni nisi saepe laborum velit?
Fuga ex excepturi vel quia quaerat incidunt? Modi, qui repellendus. Blanditiis, dolore culpa in neque iure rerum quidem perferendis unde dicta porro provident sint voluptas magni quod minima ratione? Possimus!
Beatae repellendus omnis voluptatibus accusamus sapiente sit laboriosam architecto fugit eum odio aperiam quo molestiae nobis assumenda magnam, quos repudiandae non, quas aspernatur vitae tempore, eius hic. Exercitationem, cupiditate tempore.
Ex, distinctio. Non consequatur voluptatum officia debitis quaerat ipsum necessitatibus cupiditate molestiae quos odio voluptates, possimus enim laboriosam ab, ipsam, quis mollitia animi eligendi corporis dolorem veniam iusto! Excepturi, inventore!
In optio recusandae accusamus incidunt consectetur at dolorem dolor eos fugit iste similique dolore facere totam, maiores possimus et, placeat autem nesciunt magnam commodi? Expedita quibusdam quisquam a voluptate cum!
Asperiores id rerum odio reiciendis velit facilis! Rem aliquam doloribus voluptate laudantium. Esse est veritatis, alias molestiae facilis expedita vitae consequatur pariatur nam ex consequuntur iusto eum vero rem praesentium!
Facere aut eligendi reprehenderit pariatur veritatis voluptate architecto cum voluptas sequi consectetur, natus placeat accusamus alias voluptatibus culpa rerum! Facilis sed reprehenderit facere placeat, odio ipsam incidunt provident quas fugit.
Aspernatur ex quaerat quisquam excepturi fugit quia, sunt, facere nam nisi odio reiciendis labore pariatur beatae modi maiores rerum corrupti quibusdam. Fugiat alias earum ex iure quas delectus neque eos!
<?php
$titre = "Page1";
$contenu = ob_get_clean();
include "layout.php";
?>