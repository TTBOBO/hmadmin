<?php

/* admin/product/service.html */
class __TwigTemplate_39ac401d5f0243f64dfb6f8edfe4ab8b77513d48c3f361384728d707aceab46a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("admin/iheader.html", "admin/product/service.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/product/service.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/product/service.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
</script>
<script>
    ykp.defineClass(['element', \"jquery\", 'laytpl'], {
        init: function () {
            var it = this;
            //初始化列表
            it.initTabel();
        },
        initTabel: function () {
        \thm.loadTable({
        \t\t \tprimaryKey:\"id\",    //该行id字段名  也名主键 根据连标或者不连表来定义
                    topTool: {
                        btnArr: [{title: \"添加\", type: \"add\",url: '/admin/product/addService'},//添加 控制器  ,role:1000  role  代表权限id    存在显示  不存在 不显示;
                            {title: \"高级搜索\", type: \"hSearch\"}, 
                            {title: \"批量删除\", type: \"plDel\", class: \"layui-btn-danger\", url: '/admin/api_product/delete'},   //批量删除 接口
                            {title: \"导入\", type: \"improt\", url: \"/upload\"},\t\t//导入 接口
                            {title: \"导出\", type: \"export\", url: \"/upload\"},\t\t//导出  接口  
                        \t{type: \"edit\", url: '/admin/product/editService?id='},\t\t//编辑    控制器     ,role:1000  role  代表权限id 
                            {type: \"detail\", url: '/admin/product/serviceInfo?id='},\t//查看详情   控制器
                            {type: \"del\", url: '/admin/api_product/delete'}   //删除   //api
                        ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"ID\", hidden:true, type: \"\", sear: \"id\"},
                        {field: \"name\", width: 80, title: \"名称\", type: \"\", sear: \"name\"},
                        {field: \"icon\", width: 80, title: \"图标地址\", type: \"image\", },
                        {field: \"title\", width: 150, title: \"标题简介\", type: \"\", sear: \"title\"},
                        {field: \"content\", width: 150, title: \"服务内容\", type: \"\", sear: \"content\"},
                        {field: \"pics\", width: 80, title: \"图片地址\", type: \"image\", sear: \"pice\", },
                        {field: \"type\", width: 150, title: \"类型\", type: \"select\", sear: \"type\", enum: {0: \"虚拟服务\", 1: \"实体服务\"}},
//                      {field: \"am_admin-username\", width: 150, title: \"创建人\", type: \"select\", sear: \"am_admin-creator_id\",url:'/admin/am/api_admin/grid',colKey:\"am_admin.aid\",colName:\"am_admin.username\"},
                        {field: \"is_limit_num\", width: 150, title: \"是否限制次数\", type: \"select\", sear: \"is_limit_num\" , enum: {0: \"不限制\", 1: \"限制\"}},
                        {field: \"create_at\", width: 200, sort: true, title: \"创建时间\", type: \"time\", sear: \"create_at\"},
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right'}
                    ],
                    reader: {
                        url: \"/admin/api_product/grid\",
                        filter: \"\"
                    },
                  \tautoCol: false, //自定义列表   true  没有自定义列表,   
               });
               /**
                * cols   
                * type : 默认为空  image 图片  time 时间    select（1、enum  枚举对应显示的信息  2、url, colKey,colName   接口异步获取   colKey 下拉框的value值    colName 下拉框的显示的值 ）
                * sear 搜索的字段   连表时   表名-字段    不连表时  字段 
                * id 显示的字段    连表时   表名-字段    不连表时  字段 
                * align   文字float  居中 居左  居右
                * fixed 列定位  
                * title  列名
                * hidden   true  为默认隐藏
                * 
                * 
                * 
                * primaryKey  主键    连表时   表名-字段    不连表时  字段 
                */
        }
    });
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/product/service.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* </script>*/
/* <script>*/
/*     ykp.defineClass(['element', "jquery", 'laytpl'], {*/
/*         init: function () {*/
/*             var it = this;*/
/*             //初始化列表*/
/*             it.initTabel();*/
/*         },*/
/*         initTabel: function () {*/
/*         	hm.loadTable({*/
/*         		 	primaryKey:"id",    //该行id字段名  也名主键 根据连标或者不连表来定义*/
/*                     topTool: {*/
/*                         btnArr: [{title: "添加", type: "add",url: '/admin/product/addService'},//添加 控制器  ,role:1000  role  代表权限id    存在显示  不存在 不显示;*/
/*                             {title: "高级搜索", type: "hSearch"}, */
/*                             {title: "批量删除", type: "plDel", class: "layui-btn-danger", url: '/admin/api_product/delete'},   //批量删除 接口*/
/*                             {title: "导入", type: "improt", url: "/upload"},		//导入 接口*/
/*                             {title: "导出", type: "export", url: "/upload"},		//导出  接口  */
/*                         	{type: "edit", url: '/admin/product/editService?id='},		//编辑    控制器     ,role:1000  role  代表权限id */
/*                             {type: "detail", url: '/admin/product/serviceInfo?id='},	//查看详情   控制器*/
/*                             {type: "del", url: '/admin/api_product/delete'}   //删除   //api*/
/*                         ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "ID", hidden:true, type: "", sear: "id"},*/
/*                         {field: "name", width: 80, title: "名称", type: "", sear: "name"},*/
/*                         {field: "icon", width: 80, title: "图标地址", type: "image", },*/
/*                         {field: "title", width: 150, title: "标题简介", type: "", sear: "title"},*/
/*                         {field: "content", width: 150, title: "服务内容", type: "", sear: "content"},*/
/*                         {field: "pics", width: 80, title: "图片地址", type: "image", sear: "pice", },*/
/*                         {field: "type", width: 150, title: "类型", type: "select", sear: "type", enum: {0: "虚拟服务", 1: "实体服务"}},*/
/* //                      {field: "am_admin-username", width: 150, title: "创建人", type: "select", sear: "am_admin-creator_id",url:'/admin/am/api_admin/grid',colKey:"am_admin.aid",colName:"am_admin.username"},*/
/*                         {field: "is_limit_num", width: 150, title: "是否限制次数", type: "select", sear: "is_limit_num" , enum: {0: "不限制", 1: "限制"}},*/
/*                         {field: "create_at", width: 200, sort: true, title: "创建时间", type: "time", sear: "create_at"},*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         url: "/admin/api_product/grid",*/
/*                         filter: ""*/
/*                     },*/
/*                   	autoCol: false, //自定义列表   true  没有自定义列表,   */
/*                });*/
/*                /***/
/*                 * cols   */
/*                 * type : 默认为空  image 图片  time 时间    select（1、enum  枚举对应显示的信息  2、url, colKey,colName   接口异步获取   colKey 下拉框的value值    colName 下拉框的显示的值 ）*/
/*                 * sear 搜索的字段   连表时   表名-字段    不连表时  字段 */
/*                 * id 显示的字段    连表时   表名-字段    不连表时  字段 */
/*                 * align   文字float  居中 居左  居右*/
/*                 * fixed 列定位  */
/*                 * title  列名*/
/*                 * hidden   true  为默认隐藏*/
/*                 * */
/*                 * */
/*                 * */
/*                 * primaryKey  主键    连表时   表名-字段    不连表时  字段 */
/*                 *//* */
/*         }*/
/*     });*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
