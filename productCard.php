<?php
echo '
    <div class="col-auto">
        <div class="product shadow" id="user_product">
            <table style="width: 100%;">

                <tr>
                    <td>
                            <a href="details.php?id='.$prod[0].'">
                                <img src="images/'.$prod[6].'" class="img"/>
                            </a>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <div style="color: rgb(73, 1, 73);">
                            <span>';
                                if(strlen($prod[1]) > 16){
                                    echo $prod[1];
                                } else{
                                    echo "".$prod[1]."<br><br>";
                                }
                            echo '</span>                                 
                        </div>
                        <div class="price">
                            <span class="fw-bold">'.$prod[4].' DT</span>
                        </div>                            
                    </td>
                </tr>
            </table>
        </div> 
    </div> ';
?>