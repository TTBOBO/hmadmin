<?php

/* admin/product/serviceInfo.html */
class __TwigTemplate_508b6a32502d0b9bb49ac46959b0c4ac9715aa73c479305661418da6c0586e9f extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/product/serviceInfo.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/product/serviceInfo.html", 3)->display($context);
        // line 4
        echo "<div class=\"layui-collapse\" lay-filter=\"test\">
\t<div class=\"layui-colla-item\">
\t\t<h2 class=\"layui-colla-title\">下拉查看详情</h2>
\t\t<div class=\"layui-colla-content\">
\t\t\t<form class=\"layui-form\" action=\"\" style=\"width: 700px; padding-bottom: 100px;\">
\t\t\t\t
\t\t\t</form>
\t\t</div>
\t</div>
</div>
<script>
\tykp.defineClass(['element', \"jquery\"], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\t//初始化列表
\t\t\tit.initFrom();
\t\t},
\t\tinitFrom: function() {
\t\t\thm.loadInfo({
\t\t\t\tcol: [{name: '名称',val: 'name'},
\t\t\t\t\t{name: '图标地址',type: 'img',val: 'icon'},
\t\t\t\t\t{name: '标题简介',val: 'title'},
\t\t\t\t\t{name: '服务内容',val: 'content'},
\t\t\t\t\t{name: '图片地址',type: 'img',val: 'pics'},
\t\t\t\t\t{name: '类型',val: 'type',select:true,enum:{0:\"虚拟服务\",1:\"实体服务\"}},
\t\t\t\t\t\t//{name: '类型',val: 'type',select:true,url:\"/admin/api_presend_item/grid\",colKey:'id',colName:\"name\"},   //异步获取数据枚举数据时
\t\t\t\t\t{name: '是否限制次数',val: 'is_limit_num',select:true,enum:{0:\"不限制\",1:\"限制次数\"}},   
\t\t\t\t\t{name: '创建时间',val: 'create_at',w:200}
\t\t\t\t],
\t\t\t\turl:\"/admin/api_product/info\",  //获取详情的接口
\t\t\t\tkey:\"id\"   //获取详情的id 
\t\t\t})
\t\t},
\t});
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/product/serviceInfo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>.layui-form-label {width: 100px !important;}</style>*/
/* {% include 'admin/crumbs1.html' %}*/
/* <div class="layui-collapse" lay-filter="test">*/
/* 	<div class="layui-colla-item">*/
/* 		<h2 class="layui-colla-title">下拉查看详情</h2>*/
/* 		<div class="layui-colla-content">*/
/* 			<form class="layui-form" action="" style="width: 700px; padding-bottom: 100px;">*/
/* 				*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* 	ykp.defineClass(['element', "jquery"], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initFrom();*/
/* 		},*/
/* 		initFrom: function() {*/
/* 			hm.loadInfo({*/
/* 				col: [{name: '名称',val: 'name'},*/
/* 					{name: '图标地址',type: 'img',val: 'icon'},*/
/* 					{name: '标题简介',val: 'title'},*/
/* 					{name: '服务内容',val: 'content'},*/
/* 					{name: '图片地址',type: 'img',val: 'pics'},*/
/* 					{name: '类型',val: 'type',select:true,enum:{0:"虚拟服务",1:"实体服务"}},*/
/* 						//{name: '类型',val: 'type',select:true,url:"/admin/api_presend_item/grid",colKey:'id',colName:"name"},   //异步获取数据枚举数据时*/
/* 					{name: '是否限制次数',val: 'is_limit_num',select:true,enum:{0:"不限制",1:"限制次数"}},   */
/* 					{name: '创建时间',val: 'create_at',w:200}*/
/* 				],*/
/* 				url:"/admin/api_product/info",  //获取详情的接口*/
/* 				key:"id"   //获取详情的id */
/* 			})*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
