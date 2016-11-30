<?php if (!defined('THINK_PATH')) exit();?><table  border="3" height="100" width="1000" id="tab">
    <tbody >
    <tr>
        <th><input type="checkbox">编号</th>
        <th>商品名称</th>
        <th>价格</th>
        <th>人数</th>
        <th>上架</th>
        <th>图片</th>
        <th>操作</th>
    </tr>
    <?php foreach($list as $key=>$val){?>
    <tr>
        <td><input type="checkbox" name="checkboxes[]" value="32"><?php echo $val['g_id']?></td>
        <td class="first-cell"><?php echo $val['g_name']?></td>
        <td align="right"><?php echo $val['goods_money']?></td>
        <td align="right"><?php echo $val['partake_people']?></td>
        <td align="center">
            <?php if($val['goods_status']==0){?>
            <img src="/shiyi/yiyuangou/Public/images/no.gif"  c_id="<?php echo $val['g_id']?>" >
            <?php }else{?>
            <img src="/shiyi/yiyuangou/Public/images/yes.gif"   c_id="<?php echo $val['g_id']?>" >
            <?php }?>
        </td>
        <td><img src="/shiyi/yiyuangou/<?php echo ($val["filename"]); ?>" alt="" width="50" height="50"/></td>
        <td><a href="/shiyi/yiyuangou/admin.php/Home/Goods/up?id=<?php echo ($val["g_id"]); ?>" >修改</a></td>
    </tr>
    <?php }?>
    <!-- start 这段代码没有格式化，只是暂时显示数据用 开发的时候将会删除-->

    </tbody>
</table>