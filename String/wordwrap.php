<?php 
$sentence = "Lorem ipsum dolortttttttttttttttttttttttt sit amet consectetur adipisicing elit. Vitae accusamus tempora quam dolor. Iure aperiam veniam commodi, cum deleniti aut reprehenderit sapiente ex beatae, maxime enim voluptatem expedita distinctio excepturi aspernatur recusandae molestiae libero ea. In, alias molestias. Consectetur omnis repellat odio dolorem eveniet laboriosam veritatis aspernatur, id quod ab?";

$wrapping = wordwrap($sentence, 26,"\n", TRUE);
echo $wrapping;

?>