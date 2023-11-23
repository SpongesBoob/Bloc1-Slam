<?php
declare (strict_types=1);


function titre($contente,$subTitle='',$level=1): void {
    echo "<h$level>$contente</h$level>";
    if($subTitle!=null){
        echo "<p class='sub -title'>$subTitle</p>";
    }


}


function get(string $key,$defaultValue=null): mixed {
    return $_GET[$key]??$defaultValue;
}


function post(string $key,$defaultValue=null): mixed{
    return $_GET[$key]??$defaultValue;
}


/**
 * retourne le paragraphe avec les mots mélangés
 * @param string $paragraphe
 * @return string
 **/


function shufflePara(string $paragraphe): string {
    $words=explode(" ",strtolower($paragraphe));
    shuffle($words);
    return ucfirst(implode(" ",$words));

}


const LOREM_IPSUM_ARRAY=[
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan elit convallis lorem ultrices laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam at scelerisque sem, in tincidunt tellus. Quisque nec dapibus erat. Morbi nec laoreet tortor. Duis euismod, elit ac tristique sodales, turpis velit tempor diam, vel condimentum ipsum velit ut velit. Maecenas eu metus faucibus, congue urna vitae, facilisis odio. In erat quam, elementum at commodo ac, condimentum sit amet velit. Etiam imperdiet at nisi id tempor. Pellentesque nec velit maximus, aliquam libero et, dignissim elit.",
    "Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus ex risus, rutrum nec interdum vel, faucibus ac metus. Mauris vulputate, erat sed tempor ultricies, mi nulla elementum leo, non consequat odio sapien quis elit. Suspendisse gravida velit non nulla vulputate blandit. Mauris aliquam faucibus neque a porta. Nulla in ante blandit, egestas nulla et, semper ligula. Aliquam elementum feugiat justo sed tincidunt. Phasellus auctor, lacus dapibus convallis elementum, libero augue semper purus, vel interdum urna quam in odio. Aliquam erat risus, vehicula sed lacus euismod, elementum placerat ipsum. Curabitur iaculis est at pharetra molestie. Nunc ultrices arcu efficitur eros malesuada, a ornare nisi tristique. Sed gravida orci in lectus venenatis tempus eu quis arcu. In diam ipsum, efficitur in est vitae, aliquet eleifend nulla. Quisque mattis condimentum neque eget viverra. Donec interdum accumsan congue. Fusce sit amet varius erat.",
    "Nunc rutrum eros vel risus maximus placerat et cursus justo. Vestibulum in orci sagittis, facilisis metus quis, porttitor sapien. Donec quis orci justo. Donec pulvinar ultrices lacinia. Sed tristique non lorem sit amet bibendum. Integer commodo ultrices ligula a ornare. In vitae urna finibus, varius lectus efficitur, eleifend nibh. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.",
    "Etiam tempor ex pretium, ullamcorper neque vitae, bibendum quam. Vivamus imperdiet, lacus nec varius volutpat, mauris elit efficitur quam, vel feugiat enim metus quis nisi. Nam ac interdum mi. Praesent laoreet iaculis luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer rutrum nec ante quis fermentum. Sed pellentesque, enim a malesuada luctus, nisl arcu egestas neque, eu sollicitudin mi nisl a lacus. Nulla eu quam dolor. In tortor ipsum, rutrum sit amet fringilla interdum, aliquet at mauris. Mauris ullamcorper porttitor tempor. Suspendisse potenti. Aliquam bibendum eget lectus vel laoreet. Donec tempor felis id fermentum porta. Mauris convallis eleifend libero, tincidunt sagittis nibh ornare sit amet. Donec dapibus, turpis tempor aliquet imperdiet, justo diam consequat justo, a cursus ex odio eu nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.",
    "Donec eget sollicitudin nunc. Integer convallis velit ut nulla varius sodales. In hac habitasse platea dictumst. Vestibulum nec maximus ipsum, at accumsan ante. Maecenas sagittis orci augue, in pulvinar arcu rutrum molestie. Nam finibus diam a tellus varius, nec suscipit risus placerat. Nulla commodo vel neque quis luctus. Proin ornare a neque eu feugiat. Sed facilisis sed urna in porta. Nulla eget mi sodales, fermentum magna a, aliquam quam. Pellentesque ut maximus leo. Quisque in lectus bibendum, ultrices urna ut, aliquet libero. Nam lacinia lectus leo, ac dapibus erat viverra vel.",
    "Aliquam erat volutpat. Donec mauris nisi, imperdiet sed sodales et, bibendum ac arcu. Proin ac nunc nec velit lobortis elementum. Suspendisse risus ex, mattis eu mauris sed, elementum imperdiet est. Morbi ullamcorper ipsum a laoreet dictum. Mauris efficitur dapibus purus, feugiat aliquet nibh viverra eget. Aliquam condimentum libero ut facilisis tempor. Mauris non mi a dui tristique feugiat. Praesent massa nunc, rutrum non commodo id, tristique at ante. Nulla mi arcu, faucibus non metus ac, laoreet vehicula lacus. Pellentesque pulvinar augue ut erat posuere tincidunt. Aliquam erat volutpat.",
    "Phasellus egestas hendrerit nunc non blandit. Donec pharetra, nisl eget bibendum lobortis, nunc risus feugiat magna, sed placerat lectus ipsum nec dui. Donec lectus nisl, dignissim vel dolor facilisis, suscipit consequat odio. Sed a ornare ipsum, sed imperdiet lorem. Phasellus fringilla eu elit sit amet aliquet. Praesent diam lectus, commodo non nulla ac, luctus semper lorem. Curabitur a lacus mattis dui vulputate pharetra. Nulla lobortis eu neque ut ornare. Quisque nec vestibulum justo. Pellentesque sodales convallis cursus. Aenean tellus dui, congue ac bibendum at, lobortis id dui. Nunc sed tincidunt enim. Duis at ipsum magna.",
    "Phasellus euismod hendrerit lacus tempus semper. Vivamus eget mi tellus. Vestibulum posuere elit eu augue pharetra iaculis. Suspendisse potenti. Suspendisse risus arcu, aliquam non varius efficitur, egestas vitae libero. Sed a porttitor nunc. Proin vestibulum vitae ligula nec vulputate. Aliquam sem turpis, pharetra finibus interdum nec, interdum nec lectus. Ut accumsan diam sed varius consequat. Etiam ac aliquet sapien, id interdum quam. Morbi suscipit aliquet arcu, ut tincidunt massa vulputate ac. Curabitur eget accumsan purus, condimentum tincidunt tellus. Quisque commodo ut justo vel laoreet. Pellentesque nunc nisi, porttitor a libero non, tincidunt maximus ante. Donec ornare velit laoreet molestie hendrerit.",
    "Cras condimentum velit id sagittis sollicitudin. In sed orci rutrum tortor gravida convallis vitae vehicula metus. Donec elementum nec augue ut hendrerit. Vivamus egestas consectetur libero, quis cursus arcu ullamcorper a. Quisque ac interdum massa, eu elementum mauris. Cras id consequat dui. Sed sollicitudin, est nec porttitor fringilla, erat tortor tincidunt risus, ut ultricies ante tortor sit amet metus. Sed et nibh eget nibh rutrum porta. Donec ut orci pellentesque diam facilisis ultricies. Vestibulum augue est, dictum eu tortor ut, porttitor rutrum mi. Vestibulum et tellus id sapien maximus elementum at et orci. Maecenas mollis massa id pretium dictum. Aliquam finibus a odio sit amet ornare. Ut tristique urna vitae augue laoreet vehicula. Duis imperdiet consequat luctus. Morbi a nisl eget erat mollis tempor.",
];
