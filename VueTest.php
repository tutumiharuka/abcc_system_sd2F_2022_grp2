<?php
    require_once "DBManager.php";
    $dbmng = new DBManager();
    $data = $dbmng->getNewList();
    $list_json = json_encode($data, JSON_UNESCAPED_UNICODE);
    // printf($list_json);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios@0.17.1/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.5/lodash.min.js"></script>
<title>Vue App</title>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-3">
            <select class="form-select" aria-label="Default select example">
                <option selected>並び替え</option>
                <option value="1">人気順</option>
                <option value="2">新しい順</option>
                <option value="3">古い順</option>
                <option @click="sortByPrice">安い順</option>
                <option value="5">高い順</option>
            </select>
        </div>
    </div>



    <div id="app">
        <div v-for='game in list'>
            <ul>
                <li>{{game.shohin_id}}</li>
                <li>{{game.shohin_name}}</li>
                <li>{{game.price}}</li>
                <li>{{game.image_small}}</li>
            </ul>
        </div>
    </div>



</div>




    
    <script>
        let list = JSON.parse('<?php echo $list_json; ?>');
        console.log(list);
        const app = new Vue({
            el: '#app',
            data: {
                list: list
            },
            
            computed: {
                sortByPrice(){
                    return this.game.sort((a, b) => {
                        return (a.price < b.price) ? -1 : (a.price > b.price) ? 1 : 0;
                    });
                }
            }
        });
    </script>
</body>
</html>