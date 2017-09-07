/*
Navicat MySQL Data Transfer

Source Server         : jx
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : rd

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-02-01 14:52:42
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `rd_action`
-- ----------------------------
DROP TABLE IF EXISTS `rd_action`;
CREATE TABLE `rd_action` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `action_myname` varchar(32) NOT NULL,
  `controllers_name` varchar(32) NOT NULL,
  `mothods_name` varchar(32) NOT NULL,
  `action_status` tinyint(4) DEFAULT '1',
  `action_des` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_action
-- ----------------------------
INSERT INTO `rd_action` VALUES ('1', '用户浏览', 'users', 'index', '1', '浏览用户信息');
INSERT INTO `rd_action` VALUES ('2', '用户添加', 'users', 'add', '1', '添加用户信息');
INSERT INTO `rd_action` VALUES ('3', '用户删除', 'users', 'del', '1', '删除用户信息，请你谨慎操作');
INSERT INTO `rd_action` VALUES ('4', '管理员列表', 'admin', 'index', '1', '查看管理员列表');
INSERT INTO `rd_action` VALUES ('5', '管理员添加', 'admin', 'add', '1', '管理员添加管理员添加管理员添加');
INSERT INTO `rd_action` VALUES ('6', '角色添加', 'role', 'add', '1', '角色添加角色添加角色添加');
INSERT INTO `rd_action` VALUES ('7', '角色列表', 'role', 'index', '1', '角色列表角色列表');
INSERT INTO `rd_action` VALUES ('8', '角色删除', 'role', 'del', '1', '角色删除角色删除，请你谨慎操作');
INSERT INTO `rd_action` VALUES ('9', '管理员删除', 'admin', 'delete_tags', '1', '管理员删除，没有真正删除管理员，只是隐藏了');
INSERT INTO `rd_action` VALUES ('10', '管理员密码修改', 'admin', 'changepwd', '1', '管理员密码修改,修改本身密码');
INSERT INTO `rd_action` VALUES ('11', '订单列表', 'order', 'index', '1', '订单列表');
INSERT INTO `rd_action` VALUES ('12', '权限设置', 'role', 'action_save', '1', '权限设置权限设置');
INSERT INTO `rd_action` VALUES ('13', '权限列表', 'role', 'index', '1', '权限列表权限列表');
INSERT INTO `rd_action` VALUES ('14', '订单删除', 'order', 'del', '1', '订单删除');
INSERT INTO `rd_action` VALUES ('15', '订单详情', 'order', 'view', '1', '订单详情');
INSERT INTO `rd_action` VALUES ('16', '商品列表', 'goods', 'index', '1', '商品列表商品列表');
INSERT INTO `rd_action` VALUES ('17', '商品添加', 'goods', 'add', '1', '商品添加商品添加');
INSERT INTO `rd_action` VALUES ('18', '商品修改', 'goods', 'edit', '1', '商品修改商品修改商品修改');
INSERT INTO `rd_action` VALUES ('19', '商品删除', 'goods', 'del', '1', '商品删除商品删除 谨慎操作');
INSERT INTO `rd_action` VALUES ('20', '操作列表', 'action', 'index', '1', '显示操作列表');
INSERT INTO `rd_action` VALUES ('21', '操作修改', 'action', 'edit', '1', '操作修改');
INSERT INTO `rd_action` VALUES ('22', '操作删除', 'action', 'del', '1', '操作删除操作删除，请你谨慎操作');
INSERT INTO `rd_action` VALUES ('23', '文章浏览', 'article', 'index', '1', '文章浏览列表');
INSERT INTO `rd_action` VALUES ('24', '文章添加', 'article', 'add', '1', '文章添加文章添加文章添加');
INSERT INTO `rd_action` VALUES ('25', '文章修改', 'article', 'edit', '1', '文章修改文章修改');
INSERT INTO `rd_action` VALUES ('26', '文章删除', 'article', 'del', '1', '文章删除，请你谨慎操作');
INSERT INTO `rd_action` VALUES ('27', '文章分类', 'articlecat', 'index', '1', '查看文章分类列表');
INSERT INTO `rd_action` VALUES ('28', '文章分类添加', 'articlecat', 'add', '1', '文章分类添加');
INSERT INTO `rd_action` VALUES ('29', '商品分类添加', 'goodscat', 'add', '1', '商品分类添加商品分类添加');
INSERT INTO `rd_action` VALUES ('30', '商品分类列表', 'goodscat', 'index', '1', '商品分类列表商品分类列表');
INSERT INTO `rd_action` VALUES ('31', '显示作品列表', 'production', 'index', '1', '显示作品列表显示作品列表');
INSERT INTO `rd_action` VALUES ('32', '显示作品添加', 'production', 'add', '1', '显示作品添加显示作品添加显示作品添加');
INSERT INTO `rd_action` VALUES ('33', '显示作品详情', 'production', 'view', '1', '显示作品详情显示作品详情');
INSERT INTO `rd_action` VALUES ('34', '显示友情链接', 'links', 'index', '1', '显示友情链接显示友情链接');
INSERT INTO `rd_action` VALUES ('35', '添加友情链接', 'links', 'add', '1', '添加友情链接');
INSERT INTO `rd_action` VALUES ('36', '编辑友情链接', 'links', 'edit', '1', '编辑友情链接');
INSERT INTO `rd_action` VALUES ('37', '显示首页幻灯片', 'ad', 'index', '1', '显示列表');
INSERT INTO `rd_action` VALUES ('38', '添加幻灯片', 'ad', 'add', '1', '添加幻灯片');

-- ----------------------------
-- Table structure for `rd_ad`
-- ----------------------------
DROP TABLE IF EXISTS `rd_ad`;
CREATE TABLE `rd_ad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adname` varchar(30) NOT NULL,
  `pic` varchar(100) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `is_index` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_ad
-- ----------------------------
INSERT INTO `rd_ad` VALUES ('1', '雪乡犹如一颗璀璨的明珠，镶嵌在张广财岭的东南坡', '54c27644120ca.jpg', '1422030404', '1', '0');
INSERT INTO `rd_ad` VALUES ('2', '完美邂逅韩剧、时尚、美食，还有欧巴！', '54c2765f7510a.jpg', '1422030431', '1', '0');
INSERT INTO `rd_ad` VALUES ('3', '虔诚礼佛，阳光海滩，美食美景，一切“泰”美丽。', '54c27679687ce.jpg', '1422030457', '0', '1');
INSERT INTO `rd_ad` VALUES ('4', '穿行世界十大最美桥梁 看风景细水长流', '54c2769ebfade.jpg', '1422030494', '0', '1');
INSERT INTO `rd_ad` VALUES ('5', '美国东西海岸夏威夷大瀑布14日游 ', '54c276bade96f.jpg', '1422030522', '0', '1');
INSERT INTO `rd_ad` VALUES ('6', '欧美大片', '54c6391e3a904.jpg', '1422276894', '1', '0');
INSERT INTO `rd_ad` VALUES ('7', '韩国思密达', '54c6393a804b6.jpg', '1422276922', '1', '0');
INSERT INTO `rd_ad` VALUES ('8', '婚礼内场', '54c63963a8e88.jpg', '1422276963', '1', '0');
INSERT INTO `rd_ad` VALUES ('9', '婚宴经典', '54c639736ec76.jpg', '1422276979', '1', '0');

-- ----------------------------
-- Table structure for `rd_admin`
-- ----------------------------
DROP TABLE IF EXISTS `rd_admin`;
CREATE TABLE `rd_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(32) NOT NULL,
  `pwd` char(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ip` int(11) DEFAULT NULL,
  `pretime` int(11) DEFAULT NULL,
  `retime` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `is_delete` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_name` (`admin_name`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_admin
-- ----------------------------
INSERT INTO `rd_admin` VALUES ('1', 'admin', '828fd9255753432d51df95eb62d61722', '1234asdf@qq.com', '-1062700805', '1422319410', '1421760771', '0', '0');
INSERT INTO `rd_admin` VALUES ('2', 'QQ', 'cc1740b62e734ec5f28a2d020cec57f9', '747097006@qq.com', '2130706433', '1421760903', '1421760903', '0', '0');
INSERT INTO `rd_admin` VALUES ('3', '小红', '828fd9255753432d51df95eb62d61722', '1234asdf@qq.com', '2130706433', '1421802111', '1421760934', '0', '0');
INSERT INTO `rd_admin` VALUES ('4', '季旋', '828fd9255753432d51df95eb62d61722', '123445f@qq.com', '2130706433', '1421760955', '1421760955', '0', '0');
INSERT INTO `rd_admin` VALUES ('5', '小宏伟', '828fd9255753432d51df95eb62d61722', '123445f@qq.com', '2130706433', '1421760983', '1421760983', '0', '0');
INSERT INTO `rd_admin` VALUES ('6', '苍老师', '828fd9255753432d51df95eb62d61722', '1234asdf@qq.com', '2130706433', '1421946834', '1421761024', '0', '0');
INSERT INTO `rd_admin` VALUES ('7', '饭岛爱', '828fd9255753432d51df95eb62d61722', '747097006@qq.com', '-1062700805', '1422319357', '1421761057', '0', '0');
INSERT INTO `rd_admin` VALUES ('8', '小桥大爱', '828fd9255753432d51df95eb62d61722', '12345@sina.com', '2130706433', '1421761117', '1421761117', '0', '0');
INSERT INTO `rd_admin` VALUES ('9', '小哥哥', '828fd9255753432d51df95eb62d61722', '23eee425@qqq.com', '2130706433', '1422024331', '1422024331', '1', '0');

-- ----------------------------
-- Table structure for `rd_admin_role`
-- ----------------------------
DROP TABLE IF EXISTS `rd_admin_role`;
CREATE TABLE `rd_admin_role` (
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_admin_role
-- ----------------------------
INSERT INTO `rd_admin_role` VALUES ('6', '3');
INSERT INTO `rd_admin_role` VALUES ('3', '7');
INSERT INTO `rd_admin_role` VALUES ('7', '6');

-- ----------------------------
-- Table structure for `rd_article`
-- ----------------------------
DROP TABLE IF EXISTS `rd_article`;
CREATE TABLE `rd_article` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` varchar(32) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_article
-- ----------------------------
INSERT INTO `rd_article` VALUES ('1', '1', '酷结愿景', '酷结网是中国首家一站式婚庆服务网络直购平台，致力于成为婚礼行业垂直电商第一品牌。', '1413627869');
INSERT INTO `rd_article` VALUES ('2', '1', '酷结大事记', '酷结网的创始人在考察多国婚礼市场后，萌生了互联网改造婚庆的想法；', '1413627869');
INSERT INTO `rd_article` VALUES ('4', '1', '酷结介绍', '酷结网隶属于北京酷结网络技术有限公司。\r\n\r\n酷结网（www.coolmarry.cn)是全国首家一站式婚庆服务网络直购平台。\r\n酷结网隶属于北京酷结网络技术有限公司。\r\n\r\n酷结网（www.coolmarry.cn)是全国首家一站式婚庆服务网络直购平台。\r\n酷结网隶属于北京酷结网络技术有限公司。', '1413627869');
INSERT INTO `rd_article` VALUES ('5', '2', '售后流程', '1.在支付成功后24小时内，婚礼服务商会与您取得联系。\r\n2.酷结网免费提供面谈场所，您可以随时与婚礼策划师、婚礼服务商来酷结网见面约谈。', '1413627869');
INSERT INTO `rd_article` VALUES ('6', '2', '支付流程', '<a href=\"../\"></a><p>1、搜索商品</p><p>iWebShop为您提供了方便快捷的商品搜索功能：</p><p>（1）您可以通过在首页输入关键字的方法来搜索您想要购买的商品</p><p>（2）您还可以通过iWebShop的分类导航栏来找到您想要购买的商品分类，根据分类找到您的商品</p><p>（3）观看搜索商品演示</p><p>&nbsp;</p><p>2、放入购物车在您想要购买的商品的详情页点击“购买”，商品会添加到您的购物车中；您还可以继续挑选商品放入购物车，一起结算。</p><p>（1）在购物车中，系统默认每件商品的订购数量为一件，如果您想购买多件商品，可修改购买数量</p><p>（2）在购物车中，您可以将商品移至收藏，或是选择删除</p><p>（3）在购物车中，您可以直接查看到商品的优惠折和参加促销活动的商品名称、促销主题</p><p>（4）购物车页面下方的商品是iWebShop根据您挑选的商品为您作出的推荐，若有您喜爱的商品，点击“放入购物车”即可</p><p>温馨提示：</p><p>（1）商品价格会不定期调整，最终价格以您提交订单后订单中的价格为准</p><p>（2）优惠政策、配送时间、运费收取标准等都有可能进行调整，最终成交信息以您提交订单时网站公布的最新信息为准</p><p>&nbsp;</p><p>3、选择订单</p><p>（1）iWebShop和商家的商品需要分别提交订单订购</p><p>（2）不同商家的商品需要分别提交订单订购</p><p>&nbsp;</p><p>4、注册登陆</p><p>（1）老顾客：请在“登陆”页面输入Email地址或昵称、注册密码进行登陆</p><p>（2）新顾客：请在“新用户注册”页面按照提示完成注册</p><p>&nbsp;</p><p>5、填写收货人信息</p><p>（1）请填写正确完整的收货人姓名、收货人联系方式、详细的收货地址和邮编，否则将会影响您订单的处理或配送</p><p>（2）您可以进入“我的iWebShop—帐户管理—收货地址簿”编辑常用收货地址，保存成功后，再订购时，可以直接选择使用</p><p>&nbsp;</p><p>6、选择收货方式</p><p>iWebShop提供多种收货方式：</p><p>（1）普通快递送货上门</p><p>（2）加急快递送货上门</p><p>（3）普通邮递</p><p>（4）邮政特快专递(EMS)</1.酷结网为保障交易安全，暂时仅支持支付宝支付。', '1413627869');
INSERT INTO `rd_article` VALUES ('7', '2', '购买流程', '您可以通过顶端的十大分类（A），自由点选所需的婚礼服务类别。 ', '1413627869');
INSERT INTO `rd_article` VALUES ('8', '2', '投诉和建议', '服务监督：如果您对在线顾问人员不满意，可以把您的意见和建议发到： qa@coolmarry.cn，我们将在一个工作日内回复您。', '1413627869');
INSERT INTO `rd_article` VALUES ('9', '3', '实名认证与签订合同', '一、商家实名认证入驻并签订合同\r\n\r\n酷结网所有入驻婚礼服务商均通过严格的实名制审核，无论以个人服务商入驻还是机构服务商入驻，均需提供身份证、相关营业证照等资料，并签订正式有效的入驻合同。酷结网以此保证入驻婚礼服务商的信息真实性及服务品质。\r\n二、保证金机制与担保机制结合', '1413627869');
INSERT INTO `rd_article` VALUES ('10', '3', '保证金机制与担保机制', '一、商家实名认证入驻并签订合同\r\n\r\n酷结网所有入驻婚礼服务商均通过严格的实名制审核，无论以个人服务商入驻还是机构服务商入驻，均需提供身份证、相关营业证照等资料，并签订正式有效的入驻合同。酷结网以此保证入驻婚礼服务商的信息真实性及服务品质。\r\n一、商家实名认证入驻并签订合同\r\n\r\n酷结网所有入驻婚礼服务商均通过严格的实名制审核，无论以个人服务商入驻还是机构服务商入驻，均需提供身份证、相关营业证照等资料，并签订正式有效的入驻合同。酷结网以此保证入驻婚礼服务商的信息真实性及服务品质。\r\n一、商家实名认证入驻并签订合同\r\n\r\n酷结网所有入驻婚礼服务商均通过严格的实名制审核，无论以个人服务商入驻还是机构服务商入驻，均需提供身份证、相关营业证照等资料，并签订正式有效的入驻合同。酷结网以此保证入驻婚礼服务商的信息真实性及服务品质。\r\n一、商家实名认证入驻并签订合同\r\n\r\n酷结网所有入驻婚礼服务商均通过严格的实名制审核，无论以个人服务商入驻还是机构服务商入驻，均需提供身份证、相关营业证照等资料，并签订正式有效的入驻合同。酷结网以此保证入驻婚礼服务商的信息真实性及服务品质。\r\n一、商家实名认证入驻并签订合同\r\n\r\n酷结网所有入驻婚礼服务商均通过严格的实名制审核，无论以个人服务商入驻还是机构服务商入驻，均需提供身份证、相关营业证照等资料，并签订正式有效的入驻合同。酷结网以此保证入驻婚礼服务商的信息真实性及服务品质。\r\n一、商家实名认证入驻并签订合同\r\n\r\n酷结网所有入驻婚礼服务商均通过严格的实名制审核，无论以个人服务商入驻还是机构服务商入驻，均需提供身份证、相关营业证照等资料，并签订正式有效的入驻合同。酷结网以此保证入驻婚礼服务商的信息真实性及服务品质。\r\n', '1413627869');
INSERT INTO `rd_article` VALUES ('11', '3', '价格透明与全网最低', '一、商家实名认证入驻并签订合同\r\n\r\n酷结网所有入驻婚礼服务商均通过严格的实名制审核，无论以个人服务商入驻还是机构服务商入驻，均需提供身份证、相关营业证照等资料，并签订正式有效的入驻合同。酷结网以此保证入驻婚礼服务商的信息真实性及服务品质。\r\n', '1413627869');
INSERT INTO `rd_article` VALUES ('12', '4', '商务合作', '酷结网提供在线咨询和电话咨询两种方式，致力于为您提供最优质的服务：\r\n 　　·在线咨询：点击这里弹出在线顾问对话框\r\n 　　·电话咨询：400-616-6000（全国拨打仅收取市话费）', '1420814275');
INSERT INTO `rd_article` VALUES ('13', '4', '加入我们', '酷结网提供在线咨询和电话咨询两种方式，致力于为您提供最优质的服务：', '1420814192');
INSERT INTO `rd_article` VALUES ('14', '4', '服务监督', '酷结网提供在线咨询和电话咨询两种方式，致力于为您提供最优质的服务：', '1421599500');
INSERT INTO `rd_article` VALUES ('15', '5', '协议文本', '\r\n一、对协议的确认及接受\r\n \r\n\r\n1．酷结网www.coolmarry.cn（以下简称“酷结”）所提供的各项服务、产品、方案及应用的所有权和运作权归北京酷结网络技术有限公司（以下简称“公司”）所有。公司享有对酷结上一切内容的监督、提示、检查、纠正及处罚等权利。\r\n \r\n\r\n2．用户应在注册前仔细阅读如下用户协议。提醒用户注意，无论您事实上是否在注册之前认真阅读了本协议，只要您在注册账号同时点击了同意按钮，即表示本协议对您产生约束，届时用户不应以未阅读本协议的内容等理由，主张本协议无效，或要求撤销本协议。 部网络服务的权利，而无需提前通知，且不承担因业务调整给您造成的可能的损失。\r\n \r\n\r\n一、对协议的确认及接受\r\n \r\n\r\n1．酷结网www.coolmarry.cn（以下简称“酷结”）所提供的各项服务、产品、方案及应用的所有权和运作权归北京酷结网络技术有限公司（以下简称“公司”）所有。公司享有对酷结上一切内容的监督、提示、检查、纠正及处罚等权利。\r\n \r\n\r\n2．用户应在注册前仔细阅读如下用户协议。提醒用户注意，无论您事实上是否在注册之前认真阅读了本协议，只要您在注册账号同时点击了同意按钮，即表示本协议对您产生约束，届时用户不应以未阅读本协议的内容等理由，主张本协议无效，或要求撤销本协议。 部网络服务的权利，而无需提前通知，且不承担因业务调整给您造成的可能的损失。\r\n \r\n', '1421600112');
INSERT INTO `rd_article` VALUES ('16', '6', '法律保护', '法律保护法律保护法律保护法律保护', '1421600112');

-- ----------------------------
-- Table structure for `rd_article_cat`
-- ----------------------------
DROP TABLE IF EXISTS `rd_article_cat`;
CREATE TABLE `rd_article_cat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` varchar(32) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `path` varchar(60) DEFAULT NULL,
  `sort_order` int(10) DEFAULT '0',
  `is_delete` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_article_cat
-- ----------------------------
INSERT INTO `rd_article_cat` VALUES ('1', '0', '关于我们', '0', '1', '0');
INSERT INTO `rd_article_cat` VALUES ('2', '0', '帮助中心', '0', '2', '0');
INSERT INTO `rd_article_cat` VALUES ('3', '0', '消费担保', '0', '3', '0');
INSERT INTO `rd_article_cat` VALUES ('4', '0', '商家服务', '0', '4', '0');
INSERT INTO `rd_article_cat` VALUES ('5', '0', '联系我们', '0', '5', '0');
INSERT INTO `rd_article_cat` VALUES ('6', '0', '法律声明', '0', '6', '0');

-- ----------------------------
-- Table structure for `rd_car`
-- ----------------------------
DROP TABLE IF EXISTS `rd_car`;
CREATE TABLE `rd_car` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `goodsid` int(11) unsigned NOT NULL,
  `userid` int(11) unsigned NOT NULL,
  `total` int(6) unsigned DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rd_car
-- ----------------------------

-- ----------------------------
-- Table structure for `rd_column`
-- ----------------------------
DROP TABLE IF EXISTS `rd_column`;
CREATE TABLE `rd_column` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `columnname` varchar(30) NOT NULL DEFAULT '',
  `english` varchar(20) NOT NULL,
  `pid` int(11) NOT NULL,
  `path` varchar(100) DEFAULT NULL,
  `ismenu` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_column
-- ----------------------------
INSERT INTO `rd_column` VALUES ('1', '婚庆用品', 'goods', '0', '0-', '1');
INSERT INTO `rd_column` VALUES ('2', '婚纱摄影', 'dresses', '0', '0-', '1');
INSERT INTO `rd_column` VALUES ('3', '婚礼酒店', 'hole', '0', '0-', '1');
INSERT INTO `rd_column` VALUES ('4', '找婚礼人', 'designer', '0', '0-', '1');
INSERT INTO `rd_column` VALUES ('5', '蜜月攻略', 'honey', '0', '0-', '1');
INSERT INTO `rd_column` VALUES ('6', '惊喜区', 'prize', '0', '0-', '1');
INSERT INTO `rd_column` VALUES ('7', '看作品', 'works', '0', '0-', '1');
INSERT INTO `rd_column` VALUES ('8', '礼炮', 'salute', '1', '0-1-', '1');
INSERT INTO `rd_column` VALUES ('9', '家庭装饰品', 'decoration', '1', '0-1-', '1');
INSERT INTO `rd_column` VALUES ('10', '鲜花', 'flower', '1', '0-1-', '1');
INSERT INTO `rd_column` VALUES ('11', '化妆品', 'toiletry', '1', '0-1-', '1');
INSERT INTO `rd_column` VALUES ('12', '五星级酒店', 'five', '3', '0-3-', '1');
INSERT INTO `rd_column` VALUES ('13', '四星级酒店', 'four', '3', '0-3-', '1');
INSERT INTO `rd_column` VALUES ('14', '三星级酒店', 'three', '3', '0-3-', '1');
INSERT INTO `rd_column` VALUES ('15', '连锁酒店', 'chain', '3', '0-3-', '1');
INSERT INTO `rd_column` VALUES ('16', '婚宴草坪酒店', 'sod', '3', '0-3-', '1');
INSERT INTO `rd_column` VALUES ('17', '主持人', 'compere', '4', '0-4-', '1');
INSERT INTO `rd_column` VALUES ('18', '造型师', 'designer', '4', '0-4-', '1');
INSERT INTO `rd_column` VALUES ('19', '摄像师', 'cameraman', '4', '0-4-', '1');
INSERT INTO `rd_column` VALUES ('20', '策划师', 'planner', '4', '0-4-', '1');
INSERT INTO `rd_column` VALUES ('21', '布置师', 'assigner', '4', '0-4-', '1');

-- ----------------------------
-- Table structure for `rd_email_config`
-- ----------------------------
DROP TABLE IF EXISTS `rd_email_config`;
CREATE TABLE `rd_email_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email_host` varchar(32) NOT NULL,
  `company` varchar(100) NOT NULL,
  `admin_name` varchar(32) NOT NULL,
  `admin_pwd` char(32) DEFAULT NULL,
  `email_port` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_host` (`email_host`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_email_config
-- ----------------------------
INSERT INTO `rd_email_config` VALUES ('1', 'smtp:163.com', '婚庆一站式网站', 'aa791845283@163.com', 'xWpylWys', '25');

-- ----------------------------
-- Table structure for `rd_email_content`
-- ----------------------------
DROP TABLE IF EXISTS `rd_email_content`;
CREATE TABLE `rd_email_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_email` varchar(32) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `sendtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_email_content
-- ----------------------------
INSERT INTO `rd_email_content` VALUES ('1', '747097006@qq.com', '陈会安', '来面试', '你明天来我们公司面试', '1417372566');
INSERT INTO `rd_email_content` VALUES ('2', '747097004@qq.com', 'cixxo', 'xixixii', '你拉爸爸', '1417372567');
INSERT INTO `rd_email_content` VALUES ('3', '714283570@qq.com', '陈会安', 'wwwwergeragaerg', 'eragerageragear', '1420903408');
INSERT INTO `rd_email_content` VALUES ('4', '747097006@qq.com', '回到最初梦想', '来面试吧', 'wegGET', '1421487478');
INSERT INTO `rd_email_content` VALUES ('5', '747097006@qq.com', '回到最初梦想', '来面试吧', 'wegGET', '1421487478');
INSERT INTO `rd_email_content` VALUES ('6', '747097006@qq.com', '回到最初梦想', '来面试吧', '试试事实上事实上事实上事实上事实上事实上事实上', '1421487878');
INSERT INTO `rd_email_content` VALUES ('7', '747097006@qq.com', '陈会安', '来面试吧', '你今天', '1421487913');

-- ----------------------------
-- Table structure for `rd_goods`
-- ----------------------------
DROP TABLE IF EXISTS `rd_goods`;
CREATE TABLE `rd_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goodsname` varchar(30) NOT NULL DEFAULT '',
  `catid` int(11) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `total` int(6) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `detail` text,
  `sales` int(6) NOT NULL DEFAULT '0',
  `points` int(11) DEFAULT NULL,
  `newtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_goods
-- ----------------------------
INSERT INTO `rd_goods` VALUES ('1', '婚礼礼炮 彩带礼宾花', '1', '54bbea9e63213.jpg', '39.00', '92', '1', '1421601438', '<p><img src=\"/rd/Public/Uploads/goods/54bbea3c2bb60.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bbea6fef984.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bbea8bdea69.jpg\" alt=\"\" /><br /></p>', '0', '3', '1421601438');
INSERT INTO `rd_goods` VALUES ('2', '手持礼花筒礼炮 玫瑰礼花', '1', '54bbeb78b4281.jpg', '58.00', '75', '1', '1421601656', '<p><img src=\"/rd/Public/Uploads/goods/54bbeb32a57bf.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bbeb448d138.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bbeb590e214.jpg\" alt=\"\" /></p><p><br /></p>', '1', '5', '1421601656');
INSERT INTO `rd_goods` VALUES ('3', '喜庆心形礼花', '1', '54c5edf867a58.jpg', '98.00', '50', '1', '1421601968', '<p><img src=\"/rd/Public/Uploads/goods/54bbec778f4ec.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bbec8ca5499.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bbeca360ef9.jpg\" alt=\"\" /></p><p><br /></p>', '0', '9', '1422257656');
INSERT INTO `rd_goods` VALUES ('4', '婚礼大号礼花筒', '1', '54bbed793e62f.jpg', '66.00', '103', '1', '1421602169', '<p><img src=\"/rd/Public/Uploads/goods/54bbed606cc3d.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bbed7017522.jpg\" alt=\"\" /><br /></p>', '0', '6', '1421602169');
INSERT INTO `rd_goods` VALUES ('5', '精品礼花礼炮', '1', '54bbee3eee0a6.jpg', '29.00', '195', '1', '1421602367', '<p><img src=\"/rd/Public/Uploads/goods/54bbee24f2ea2.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bbee349d788.jpg\" alt=\"\" /><br /></p>', '0', '2', '1421602367');
INSERT INTO `rd_goods` VALUES ('6', '富贵平安牡丹花瓶', '2', '54bbfb7dac65f.jpg', '98.00', '12', '1', '1421604252', '<p><img src=\"/rd/Public/Uploads/goods/54bbf56af2a66.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bbf57f51863.jpg\" alt=\"\" /><br /></p>', '0', '9', '1421605757');
INSERT INTO `rd_goods` VALUES ('7', '龙凤花瓶一对 工艺摆件 ', '2', '54bbfbb1e4918.jpg', '249.00', '32', '1', '1421604506', '<p><img src=\"/rd/Public/Uploads/goods/54bbf67daa8d6.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bbf68d59fdc.jpg\" alt=\"\" /><br /></p>', '0', '24', '1421605809');
INSERT INTO `rd_goods` VALUES ('8', '节节高竹子炭雕工艺品', '2', '54bbfb5c2fe00.jpg', '208.00', '4', '1', '1421604681', '<p><img src=\"/rd/Public/Uploads/goods/54bbf72f04246.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bbf740c293f.jpg\" alt=\"\" /><br /></p>', '0', '20', '1421605724');
INSERT INTO `rd_goods` VALUES ('9', '天鹅小摆件 新婚礼品装饰', '2', '54bbfb4845d74.jpg', '88.00', '33', '1', '1421604844', '<img src=\"/rd/Public/Uploads/goods/54bbf7de23c86.jpg\" alt=\"\" />', '0', '8', '1421605704');
INSERT INTO `rd_goods` VALUES ('10', '心恋花瓶1 结婚礼物', '2', '54bbfb3a71c81.jpg', '50.00', '55', '1', '1421605016', '<p><img src=\"/rd/Public/Uploads/goods/54bbf883e44a1.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bbf88dc6fef.jpg\" alt=\"\" /><br /></p>', '0', '3', '1421605690');
INSERT INTO `rd_goods` VALUES ('11', '香槟/白玫瑰新娘手捧花●婚庆', '3', '54bbfc85b2ccc.jpg', '285.00', '8', '1', '1421606021', '<img src=\"/rd/Public/Uploads/goods/54bbfc76d4f97.png\" alt=\"\" />', '0', '28', '1421606021');
INSERT INTO `rd_goods` VALUES ('12', '新娘手捧花●婚庆●优质红玫瑰就是高大上', '3', '54bbfff282695.jpg', '299.00', '8', '1', '1421606148', '<img src=\"/rd/Public/Uploads/goods/54bbfcf422ec4.png\" alt=\"\" />', '0', '29', '1421606898');
INSERT INTO `rd_goods` VALUES ('13', '高端定制中式婚礼新娘珍珠手捧花', '3', '54bbfd8fc2784.jpg', '499.00', '11', '1', '1421606287', '<p><img src=\"/rd/Public/Uploads/goods/54bbfd7a151f6.jpg\" alt=\"\" /></p><p><br /></p>', '0', '49', '1421606287');
INSERT INTO `rd_goods` VALUES ('14', '精品奢华闪亮玫瑰绣球蕾丝蓝色调新娘手捧花', '3', '54bbfe1ed523c.jpg', '568.00', '3', '1', '1421606431', '<p><img src=\"/rd/Public/Uploads/goods/54bbfe0b98191.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bbfe17080f1.jpg\" alt=\"\" /><br /></p>', '2', '56', '1421606431');
INSERT INTO `rd_goods` VALUES ('15', '进口桃红色芍药牡丹新娘手捧花', '1', '54c5edcb877da.png', '720.00', '18', '1', '1421606551', '<img src=\"/rd/Public/Uploads/goods/54bbfe9012f08.png\" alt=\"\" />', '0', '72', '1422257611');
INSERT INTO `rd_goods` VALUES ('16', 'vaino法诺新娘安瓶定妆液影楼专用', '4', '54bc04ef73b9f.jpg', '105.00', '26', '1', '1421608175', '<p><img src=\"/rd/Public/Uploads/goods/54bc04c0af8a9.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bc04cf46852.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bc04db84cf4.jpg\" alt=\"\" /><br /></p>', '0', '10', '1421608175');
INSERT INTO `rd_goods` VALUES ('17', '玻尿酸原液补水美白淡斑祛痘去痘印红血丝安瓶定妆液', '4', '54bc05e5bf734.jpg', '139.00', '9', '1', '1421608421', '<p><img src=\"/rd/Public/Uploads/goods/54bc05c1e5091.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bc05d1d61f1.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bc05de33352.jpg\" alt=\"\" /><br /></p>', '0', '13', '1421608421');
INSERT INTO `rd_goods` VALUES ('18', '日系纯手工 假睫毛自然迁长裸妆 浓密交叉款', '4', '54bc06b27437a.jpg', '18.50', '46', '1', '1421608626', '<p><img src=\"/rd/Public/Uploads/goods/54bc06a236333.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bc06aa1676e.jpg\" alt=\"\" /><br /></p>', '0', '1', '1421608626');
INSERT INTO `rd_goods` VALUES ('19', '奥雅无暇亮采粉底 底妆化妆品美白保湿粉底膏', '4', '54bc076588d8a.jpg', '89.00', '6', '1', '1421608805', '<p><img src=\"/rd/Public/Uploads/goods/54bc075099edd.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bc075d3846e.png\" alt=\"\" /><br /></p>', '0', '8', '1421608805');
INSERT INTO `rd_goods` VALUES ('20', '兰芝粉饼 水漾粉饼SPF25 PA++ 15g 防晒遮瑕保湿', '4', '54bc07ed62a34.jpg', '298.00', '16', '1', '1421608941', '<p><img src=\"/rd/Public/Uploads/goods/54bc07da7bc27.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54bc07e4b0c28.jpg\" alt=\"\" /><br /></p>', '0', '29', '1421608941');
INSERT INTO `rd_goods` VALUES ('23', '牡丹花', '3', '54c5ece505518.jpg', '266.00', '16', '1', '1422257381', '<p><img src=\"/rd/Public/Uploads/goods/54c5ecc070f65.jpg\" align=\"middle\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54c5ecd495605.jpg\" align=\"middle\" alt=\"\" /><br /></p>', '0', '26', '1422257381');
INSERT INTO `rd_goods` VALUES ('21', '黄玫瑰', '1', '54c5aba36a61a.png', '399.00', '8', '1', '1422240413', '<p><img src=\"/rd/Public/Uploads/goods/54c5aa7087365.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54c5aa806ded1.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54c5aa916ee8f.png\" alt=\"\" /><br /></p>', '0', '39', '1422240675');
INSERT INTO `rd_goods` VALUES ('22', '黑玫瑰', '1', '54c5eda8ad170.jpg', '399.00', '19', '1', '1422240766', '<p><img src=\"/rd/Public/Uploads/goods/54c5abee55514.png\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54c5abf7c7df5.jpg\" alt=\"\" /><br /></p>', '0', '39', '1422257576');
INSERT INTO `rd_goods` VALUES ('24', '满天星', '3', '54c5ed7539de8.png', '199.00', '1', '1', '1422257525', '<p><img src=\"/rd/Public/Uploads/goods/54c5ed4a78044.jpg\" align=\"middle\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54c5ed5df0296.png\" align=\"middle\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/goods/54c5ed6d39c1f.png\" align=\"middle\" alt=\"\" /><br /></p>', '0', '19', '1422257525');

-- ----------------------------
-- Table structure for `rd_goodscat`
-- ----------------------------
DROP TABLE IF EXISTS `rd_goodscat`;
CREATE TABLE `rd_goodscat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catname` varchar(30) NOT NULL DEFAULT '',
  `pid` int(11) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  `sales` int(6) DEFAULT NULL,
  `is_menu` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_goodscat
-- ----------------------------
INSERT INTO `rd_goodscat` VALUES ('1', '礼炮', '0', '0', null, '1');
INSERT INTO `rd_goodscat` VALUES ('2', '家庭装饰品', '0', '0', null, '1');
INSERT INTO `rd_goodscat` VALUES ('3', '鲜花', '0', '0', null, '1');
INSERT INTO `rd_goodscat` VALUES ('4', '化妆品', '0', '0', null, '1');

-- ----------------------------
-- Table structure for `rd_hole`
-- ----------------------------
DROP TABLE IF EXISTS `rd_hole`;
CREATE TABLE `rd_hole` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catid` tinyint(4) DEFAULT NULL,
  `holename` varchar(30) NOT NULL DEFAULT '',
  `style` tinyint(4) DEFAULT NULL,
  `price` varchar(20) NOT NULL,
  `tabnum` int(3) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(16) NOT NULL DEFAULT '',
  `pic` varchar(100) DEFAULT NULL,
  `intro` text,
  `detail` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_hole
-- ----------------------------
INSERT INTO `rd_hole` VALUES ('1', '3', '昆泰酒店', '0', '3999-5388', '100', '朝阳区—望京启阳路', '400-0606-591', '54bcb66da7ac1.jpg', '“2000平米景观别致的空中花园、1600平米格调高雅的无柱式大宴会厅、18个风格各异的功能厅及特配可载车的大型承重电梯，满足多种会议需求，是举办各种商务会议、婚礼及车展”', '<p><img src=\"/rd/Public/Uploads/hole/54bcb1998d60c.jpg\" alt=\"\" /></p><p>B厅：</p><p>起订桌数：20桌</p><p>最大桌数：35桌</p><p>棚高：5.5米</p><p>有无柱子：没有<br /></p><p><img src=\"/rd/Public/Uploads/hole/54bcb1aa4fd82.jpg\" alt=\"\" /><br /></p><p>A厅：</p><p>起订桌数：10桌</p><p>最大桌数：20桌</p><p>棚高：5.5米</p><p>有无柱子：没有<br /></p><p><img src=\"/rd/Public/Uploads/hole/54bcb1b689e06.jpg\" alt=\"\" /></p><p>C厅：</p><p>起订桌数：10桌</p><p>最大桌数：20桌</p><p>棚高：5.5米</p><p>有无柱子：没有</p><p><img src=\"/rd/Public/Uploads/hole/54bcb2963f9b8.jpg\" alt=\"\" /></p><p>A+B+C厅：</p><p>起订桌数：35桌</p><p>最大桌数：100桌</p><p>棚高：5.5米</p><p>有无柱子：没有<br /></p><p><br /></p><p><br /></p>');
INSERT INTO `rd_hole` VALUES ('2', '3', '荣华天地', '0', '2980-12280', '60', '大兴区—亦庄荣华南路', '400-0606-591', '54bcb764f325a.jpg', '“荣华天地位于亦庄经济技术开发区荣华南路1号，紧邻地铁荣京东街站，交通非常便捷，是您婚宴场地的绝佳选择。云剧场占地1000㎡，无柱且挑高11米，有中国的维也纳金色大厅之称”', '<p><img src=\"/rd/Public/Uploads/hole/54bcb72e6dd12.jpg\" alt=\"\" /></p><p>云剧场：</p><p>起订桌数：20桌</p><p>最大桌数：60桌</p><p>棚高：10.5米</p><p>有无柱子：没有<br /></p>');
INSERT INTO `rd_hole` VALUES ('3', '3', '鸿袖会', '3', '2988-4588', '15', '朝阳区—光华路', '400-0606-591', '54bcb84d02009.jpg', '“鸿袖会位朝阳区光华路4号梅地亚中心内，地理位置优越，交通便利， 欧式现代城堡装修风格，适合年轻人个性定制化婚礼。”', '<p><img src=\"/rd/Public/Uploads/hole/54bcb810ea12e.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/hole/54bcb81a763d7.jpg\" alt=\"\" /></p><p>宴会大厅：</p><p>起订桌数：10桌</p><p>最大桌数：15桌</p><p>棚高：11米</p><p>有无柱子：没有<br /></p>');
INSERT INTO `rd_hole` VALUES ('4', '3', '北京铁道大厦酒店', '1', '2680-3180', '35', '海淀区—北蜂窝  ', '400-0606-591', '54bcb97d6f3be.jpg', '“北京铁道大厦酒店是一座四星级的综合酒店，在这里举办婚宴，是您最明智的选择。典雅大方的环境、温馨周到的服务，让您的美好婚姻从这里开始啦！”', '<p><img src=\"/rd/Public/Uploads/hole/54bcb931ea728.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/hole/54bcb93c47817.jpg\" alt=\"\" /></p><p>多功能厅：</p><p>起订桌数：20桌</p><p>最大桌数：35桌</p><p>棚高：7米</p><p>有无柱子：没有<br /></p>');
INSERT INTO `rd_hole` VALUES ('5', '3', '鸿禧国际高尔夫俱乐部', '2', '3688-5888', '36', '大兴区—东环北路', '400-0606-591', '54bcbabcc8a79.jpg', '“酒店位于亦庄经济开房区，宴会厅坐落于高尔夫球场的二楼，豪华亮丽的婚宴场地是新人婚宴举办的理想场地。”', '<p><img src=\"/rd/Public/Uploads/hole/54bcba4c76467.jpg\" alt=\"\" /></p><p>宴会厅：</p><p>起订桌数：20桌</p><p>最大桌数：36桌</p><p>棚高：8米</p><p>有无柱子：没有<br /></p><p><br /></p>');
INSERT INTO `rd_hole` VALUES ('6', '3', '北邮科技酒店', '1', '2988-3688', '28', '海淀区—西土城路 ', '400-0606-591', '54bcbbbbe78f9.jpg', '“地处交通主干道北三环蓟门桥东南角,位于北京邮电大学内,周边高校云集,位置优越。”', '<p><img src=\"/rd/Public/Uploads/hole/54bcbb71ab713.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/hole/54bcbb7e97d8e.jpg\" alt=\"\" /></p><p>多功能厅：</p><p>起订桌数：10桌</p><p>最大桌数：28桌</p><p>棚高：6米</p><p>有无柱子：没有<br /></p>');
INSERT INTO `rd_hole` VALUES ('7', '3', '北京国际航空俱乐部', '4', '2888-3888', '50', '朝阳区—机场辅路 ', '400-0606-591', '54bcbcdd28880.jpg', '“北京国际航空俱乐部系中国民航系统首家集商务办公、休闲娱乐于一体的大型综合度假场所，坐落于北京市朝阳区机场辅路200号，东距首都机场9公里，西至三元桥8公里。”', '<p><img src=\"/rd/Public/Uploads/hole/54bcbc5e7e68c.JPG\" alt=\"\" /></p><p>主楼A草坪：</p><p>起订桌数：10桌</p><p>最大桌数：50桌</p><p>棚高：-米</p><p>有无柱子：无</p><p><img src=\"/rd/Public/Uploads/hole/54bcbca82a3b8.JPG\" alt=\"\" /></p><p>主楼B草坪：</p><p>起订桌数：6桌</p><p>最大桌数：28桌</p><p>棚高：-米</p><p>有无柱子：无<br /></p>');
INSERT INTO `rd_hole` VALUES ('8', '3', '紫苏餐厅', '4', '388-3888', '20', '朝阳区—朝阳公园西路 ', '400-0606-591', '54bcbdb68895a.jpg', '“紫苏西餐厅位于朝阳公园西门八号公馆院内，为您的婚宴保证了便利的出行选择。是朋友聚会、家庭聚餐、举行婚宴、寿宴的好去处。”', '<p><img src=\"/rd/Public/Uploads/hole/54bcbd659d6d6.jpg\" alt=\"\" /><img src=\"/rd/Public/Uploads/hole/54bcbd80cbb49.jpg\" alt=\"\" /></p><p>特色草坪：</p><p>起订桌数：10桌</p><p>最大桌数：20桌</p><p>棚高：-米</p><p>有无柱子：无<br /></p>');
INSERT INTO `rd_hole` VALUES ('9', '3', '徽商故里', '2', '2388-3088', '15', '东城区—朝阳门南小街', '400-0606-591', '54bcbe9988179.jpg', ' “徽商故里是一家主营安徽菜的徽派建筑风格的酒店，酒店门面大气，装修富丽堂皇，餐厅宽敞明亮，是举办婚宴、朋友聚会的理想场所。”', '<p><img src=\"/rd/Public/Uploads/hole/54bcbe4ca8775.jpg\" alt=\"\" /></p><p><img src=\"/rd/Public/Uploads/hole/54bcbe546a518.jpg\" alt=\"\" /></p><p>徽州厅：</p><p>起订桌数：6桌</p><p>最大桌数：15桌</p><p>棚高：5米</p><p>有无柱子：没有<br /></p>');
INSERT INTO `rd_hole` VALUES ('10', '3', '兰会所', '3', '388-5888', '30', '朝阳区—建国门外大街乙 ', '400-0606-591', '54bcc6509217f.jpg', '“兰.北京设计风格尊贵、奢华，具有世界级水准的硬件设施和艺术氛围，兰将世界级水准的硬件设施与顶级的艺术氛围完美结合，自创一派、自成一体的“兰”菜系.”', '<p><img src=\"/rd/Public/Uploads/hole/54bcc5948b515.jpg\" alt=\"\" /></p><p>酒廊（适宜婚礼答谢，自助形式）</p><p>起订桌数：8桌</p><p>最大桌数：20桌</p><p>棚高：3米</p><p>有无柱子：没有</p><p><img src=\"/rd/Public/Uploads/hole/54bcc5e1641b8.jpg\" alt=\"\" /></p><p>东塔VIP包房</p><p>起订桌数：12桌</p><p>最大桌数：30桌</p><p>棚高：3米</p><p>有无柱子：没有<br /></p>');
INSERT INTO `rd_hole` VALUES ('11', '3', '凯美佳国际会议中心', '0', '3088-8888', '38', '朝阳区—花家地东路', '400-0606-591', '54bd11ef5b782.jpg', '\"北京凯美佳国际会议中心是一家五星级酒店，将近800米的大宴会厅位于酒店一层。挑高7米，无柱子，自然采光与专业灯光完美结合。\"', '<p><img src=\"/rd/Public/Uploads/hole/54bd11ac3febb.jpg\" alt=\"\" /></p><p>一层宴会厅</p><p>起订桌数：20桌</p><p>最大桌数：38桌</p><p>棚高：5米</p><p>有无柱子：没有<br /></p>');

-- ----------------------------
-- Table structure for `rd_links`
-- ----------------------------
DROP TABLE IF EXISTS `rd_links`;
CREATE TABLE `rd_links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `linksname` varchar(30) DEFAULT NULL,
  `urls` varchar(50) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `shows` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_links
-- ----------------------------
INSERT INTO `rd_links` VALUES ('1', '美食天下', 'http://www.meishichina.com/', '54bceb6152fd7.gif', '1421667169', '1');
INSERT INTO `rd_links` VALUES ('2', '哇噻网 ', 'http://www.wowsai.com/', '54bcebce8caaf.gif', '1421667278', '1');
INSERT INTO `rd_links` VALUES ('3', '北京婚庆公司', 'http://www.sunnyxipu.com/', '54bcec346e98a.gif', '1421667380', '1');
INSERT INTO `rd_links` VALUES ('4', '兰摩婚纱 ', 'http://www.lanmohunsha.com/', '54bcec6a138c5.gif', '1421667434', '1');
INSERT INTO `rd_links` VALUES ('5', '易结网', 'http://www.easywed.cn/', '54bced254cd9b.gif', '1421667621', '1');
INSERT INTO `rd_links` VALUES ('6', '酷结网', 'http://www.coolmarry.cn/', '54bced5f68c2f.gif', '1421667679', '1');
INSERT INTO `rd_links` VALUES ('7', 'LAMP兄弟连PHP培训-北京PHP培训|PHP程序员培训|', 'http://www.lampbrother.net/', '54bcf322418ab.gif', '1421669154', '1');
INSERT INTO `rd_links` VALUES ('8', '施华洛婚纱精品概念馆企业连锁', 'http://swanrov-a.hchww.com/index.php', '54bcf3f1dc8a7.gif', '1421669361', '1');
INSERT INTO `rd_links` VALUES ('9', '唯一视觉', 'http://sy.onlytw.com/', '54c13cd4375ad.gif', '1421669461', '1');
INSERT INTO `rd_links` VALUES ('10', '三亚纽约纽约婚纱摄影', 'http://www.synyny.com/', '54bcf4a3447a0.gif', '1421669539', '0');

-- ----------------------------
-- Table structure for `rd_love`
-- ----------------------------
DROP TABLE IF EXISTS `rd_love`;
CREATE TABLE `rd_love` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `area_name` varchar(100) NOT NULL,
  `pic` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `auther` varchar(32) NOT NULL,
  `intro` varchar(120) DEFAULT NULL,
  `content` text,
  `detail` text NOT NULL,
  `num` int(11) NOT NULL,
  `addtime` int(11) DEFAULT NULL,
  `is_delete` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_love
-- ----------------------------
INSERT INTO `rd_love` VALUES ('1', '韩国', 'Uploads/Love/54c5931b7b743.jpg', '小萌的韩国首尔游记', '陈会安', '完美邂逅韩剧、时尚、美食，还有欧巴！', '大韩民国地处亚洲大陆朝鲜半岛南部，三面环海，面积为9.96平方公里。韩国的一年四季都有其吸引人之处，春赏樱花，夏游济州，秋看枫叶，冬享温泉。其中最吸引人的还是济州岛的神奇海鲜和在韩剧中感动了无数人的樱花飞舞。这是一个适合全年旅行的国度，让我们一同去感浪漫之国吹起的温柔暖风吧~', '之前一个偶然的机会看到途牛网上有“途牛封面女郎”的活动，就积极的参加了，晒上了自己去马代旅游的美照。很幸运的获得了“第二季途牛封面女郎”的冠军，免费游韩国首尔。于是，小萌又能领着小跟班老公出国旅游去啦~~在此，先感谢途牛旅游网、感谢途牛旅游论坛、感谢大赛评委，感谢所有人……下面就要和大家分享我的韩国之旅啦!2013年4月20日，从今天开始要和某人一起畅游我们的韩国之旅。早上在浦东机场准备登上飞往韩国的飞机之前，我们再次见识到了泡面的强大，满机场的美食店，路过时闻到的都是泡面味。我和某人说，机场的饭店都不怎么样啊，做的菜都是泡面的味道，流水线生产的啊!某人说，你还想机场的东西能有多好吃啊。我们接着走了好几百米后，发现不对劲，怎么离开美食区后，泡面的香味反而越来越浓了，突然眼前一亮，发现前方有个老外正在埋头吃泡面中……真相只有一个，泡面不愧为一种香飘几万里的食物啊!从上海飞到韩国很快，只要2个小时不到，上了飞机刚坐稳，喝杯饮料，吃个飞机餐，就到韩国的仁川机场了。在游记之前先介绍一些韩国的情况吧。回来之后很多人都问我，韩国是不是满街都是美女?真实的韩国街头是这样的，美女是很多，不过都是画着很浓的妆画出来的美女，真实什么样子已经看不出来了，眼线、眼影、假睫毛全副武装。可能在镜头前看不觉得妆很浓，但是现实在街上看到，真的觉得她们都跟带了一个面具一样。不过韩国女人的化妆技术真的很纯熟、很好，害的我也不得不每天都画眼线涂上睫毛膏，一上街，还是觉得自己化妆技术那叫一个拙劣啊，都不想看到自己了……韩国的女人身材大部分都很好，很瘦很瘦，剩下一小部分就是非常胖的那种，但凡看到一个普通身材(比如我)的女孩子，肯定不是韩国人。我问某人，为什么韩国没有中等身材的女孩子呢?某人说，她们估计要么拼命减肥，要么就放弃了，自暴自弃了吧。在韩国不管男女老少都化妆，老大妈也都把脸涂得雪白，穿着校服的学生也画着妆。但是学生有另一个特点，再冷天气他们也穿裙子，而且肯定不穿丝袜，然后她们一般都拥有一双小黑腿。没化妆的学生也有，真心不怎么好看。在发型上，韩国女孩子和韩国大妈们都有高度的统一性。韩国年轻女人大部分都是黄色的蛋卷头，要么就是扎起来的包包头。韩国的大妈大部分都是烫的很短的卷发，类似于爆炸头，韩剧里经常能看到，满大街的韩国大妈都这个发型。相反的，韩国的男人很让我惊喜，街上看到的韩国的男人大部分长得都很清秀，很斯文，很帅，身高也普遍较高，身材修长，不要太养眼。一比较起来，某人和同团的另外两名上海男人瞬间都要挫多了，感觉不是一个级别的，气质和气场上差的就不是一点点啊。所以根据小萌预估，他们肯定也都化妆了，起码涂了BB霜什么的。外貌协会的妹纸们，都找个韩国男人嫁了吧，随手一抓都是小清新系的帅哥。还有呢，在韩国的街上几乎都是韩国车，韩国三大车系品牌：现代、起亚、三星(这个在国内没有)。导游说，别人都说韩国人很爱国，都用国产的，其实不是这样的，韩国人都开韩国车，其实是因为——便宜，而且售后服务什么的都很好，质量也过的去，大家自然都选择国产车了。不像国内满大街都是宝马、奥迪、奔驰等等，实在是因为出于安全考虑也好，中国的国产车实在很难信任啊。', '1', '1422234395', '0');
INSERT INTO `rd_love` VALUES ('2', '泰国', 'Uploads/Love/54c5939d3e470.jpg', '2014，5月 悠然泰国旅风情万种芭', '陈会安', '虔诚礼佛，阳光海滩，美食美景，一切“泰”美丽。', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '1', '1422234525', '0');
INSERT INTO `rd_love` VALUES ('3', '北京', 'Uploads/Love/54c593ff69a40.jpg', '时尚、美食时尚、美食', '小三', '雪乡犹如一颗璀璨的明珠，镶嵌在张广财岭的东南坡。', '由于受山区小气候的偏爱，这里每年十月瑞雪飘飘，冬季积雪厚度可达2米深，雪质优良，雪量丰富。隆冬季节几乎日日飞雪迎宾，好一派北国风光。拥着层层叠叠的积雪，百余户的居民区犹如一座相连的“雪屋”，房舍随物具形的积雪在风力的作用下可达1米厚，其状好似奔马、卧兔、神龟、巨蘑……千姿百态，仿佛是天上的朵朵白白云飘落，雪乡从初冬冰花乍放的清晰到早春雾淞涓流的婉约，无时无刻不散发着雪的神韵，因此得名－中国雪乡。', '由于受山区小气候的偏爱，这里每年十月瑞雪飘飘，冬季积雪厚度可达2米深，雪质优良，雪量丰富。隆冬季节几乎日日飞雪迎宾，好一派北国风光。拥着层层叠叠的积雪，百余户的居民区犹如一座相连的“雪屋”，房舍随物具形的积雪在风力的作用下可达1米厚，其状好似奔马、卧兔、神龟、巨蘑……千姿百态，仿佛是天上的朵朵白白云飘落，雪乡从初冬冰花乍放的清晰到早春雾淞涓流的婉约，无时无刻不散发着雪的神韵，因此得名－中国雪乡。由于受山区小气候的偏爱，这里每年十月瑞雪飘飘，冬季积雪厚度可达2米深，雪质优良，雪量丰富。隆冬季节几乎日日飞雪迎宾，好一派北国风光。拥着层层叠叠的积雪，百余户的居民区犹如一座相连的“雪屋”，房舍随物具形的积雪在风力的作用下可达1米厚，其状好似奔马、卧兔、神龟、巨蘑……千姿百态，仿佛是天上的朵朵白白云飘落，雪乡从初冬冰花乍放的清晰到早春雾淞涓流的婉约，无时无刻不散发着雪的神韵，因此得名－中国雪乡。', '0', '1422234623', '0');
INSERT INTO `rd_love` VALUES ('4', '三亚', 'Uploads/Love/54c5945c4e211.jpg', '中国人就是好', '陈会安', '由于受山区小气候的偏爱，这里每年十月瑞雪飘飘，冬季', '由于受山区小气候的偏爱，这里每年十月瑞雪飘飘，冬季积雪厚度可达2米深，雪质优良，雪量丰富。隆冬季节几乎日日飞雪迎宾，好一派北国风光。拥着层层叠叠的积雪，百余户的居民区犹如一座相连的“雪屋”，房舍随物具形的积雪在风力的作用下可达1米厚，其状好似奔马、卧兔、神龟、巨蘑……千姿百态，仿佛是天上的朵朵白白云飘落，雪乡从初冬冰花乍放的清晰到早春雾淞涓流的婉约，无时无刻不散发着雪的神韵，因此得名－中国雪乡。', '由于受山区小气候的偏爱，这里每年十月瑞雪飘飘，冬季积雪厚度可达2米深，雪质优良，雪量丰富。隆冬季节几乎日日飞雪迎宾，好一派北国风光。拥着层层叠叠的积雪，百余户的居民区犹如一座相连的“雪屋”，房舍随物具形的积雪在风力的作用下可达1米厚，其状好似奔马、卧兔、神龟、巨蘑……千姿百态，仿佛是天上的朵朵白白云飘落，雪乡从初冬冰花乍放的清晰到早春雾淞涓流的婉约，无时无刻不散发着雪的神韵，因此得名－中国雪乡。由于受山区小气候的偏爱，这里每年十月瑞雪飘飘，冬季积雪厚度可达2米深，雪质优良，雪量丰富。隆冬季节几乎日日飞雪迎宾，好一派北国风光。拥着层层叠叠的积雪，百余户的居民区犹如一座相连的“雪屋”，房舍随物具形的积雪在风力的作用下可达1米厚，其状好似奔马、卧兔、神龟、巨蘑……千姿百态，仿佛是天上的朵朵白白云飘落，雪乡从初冬冰花乍放的清晰到早春雾淞涓流的婉约，无时无刻不散发着雪的神韵，因此得名－中国雪乡。由于受山区小气候的偏爱，这里每年十月瑞雪飘飘，冬季积雪厚度可达2米深，雪质优良，雪量丰富。隆冬季节几乎日日飞雪迎宾，好一派北国风光。拥着层层叠叠的积雪，百余户的居民区犹如一座相连的“雪屋”，房舍随物具形的积雪在风力的作用下可达1米厚，其状好似奔马、卧兔、神龟、巨蘑……千姿百态，仿佛是天上的朵朵白白云飘落，雪乡从初冬冰花乍放的清晰到早春雾淞涓流的婉约，无时无刻不散发着雪的神韵，因此得名－中国雪乡。', '0', '1422234716', '0');
INSERT INTO `rd_love` VALUES ('5', '海尔冰', 'Uploads/Love/54c594ae45821.jpg', '美食美景，一切“泰”美丽', '陈会安', '美食美景，一切“泰”美丽美食美景，一切“泰”美丽美', '美食美景，一切“泰”美丽美食美景，一切“泰”美丽美食美景，一切“泰”美丽美食美景，一切“泰”美丽美食美景，一切“泰”美丽美食美景，一切“泰”美丽美食美景，一切“泰”美丽美食美景，一切“泰”美丽美食美景，一切“泰”美丽美食美景，一切“泰”美丽美食美景，一切“泰”美丽美食美景，一切“泰”美丽美食美景，一切“泰”美丽美食美景，一切“泰”美丽美食美景，一切“泰”美丽', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '0', '1422234798', '0');
INSERT INTO `rd_love` VALUES ('6', '中国北京', 'Uploads/Love/54c5952741951.jpg', '中国北京中国北京', '陈会安', '美食美景美食美景美食美景美食美景', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '0', '1422234919', '0');
INSERT INTO `rd_love` VALUES ('7', '云南', 'Uploads/Love/54c59595e4042.jpg', '在泰的十五天。曼谷', '小鱼儿', '在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五', '在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五天。曼谷、', '为了自己想过的生活，勇于放弃一些东西。这个世界没有公正之处。若要自由，就得牺牲安全。若要闲散，就不能获得别人评价中的成就。若要愉悦，就无须计较身边的人给予的态度。若要前行，就得离开你现在停留的地方。在这个懵懂混沌的时代，我不怕天高地厚，不知好歹，有着一颗狂傲的心。可是我没有资本，我唯一的资本就是我年轻。我总是把自己置之于一个混沌的复杂的状态，然后慢慢的抽离出来，慢慢的理清自己的思绪。然后使之简单。如此循环往复，走许多弯路。但我还乐在其中，因为我知道我要做什么，我在做什么。微博：@Q懒傻了(回复不及时可以来微博找我)1月底的某一天，照例随便看游记，然后心血来潮看了下以前觉得不错的没有看完的收藏下来的游记攻略，猛地发现里面收藏的都是关于泰国的游记。顿悟了一分钟，决定，去泰国。想一千次不如华丽的做一次。趁身心还未老，你走不走?我要走!!我不想在这个这么美好的年纪，把所有的回忆都制造在每天重复三点一线的生活当中，那些都不是我要的生活。时而还是要给生活一点添加剂的，不想以后回忆起来觉得空白。我需要新鲜的感受，我需要新的视觉冲击。new~~于是开始询问身边的朋友有没有愿意去的，感谢露露，每次我说要走，露露都会说好，走!谢谢你的陪伴。然后在空间有天絮絮唠唠的码了一些字，敏敏看到了，于是又拉了一个人。再然后，觉得第一次出国自由行还是三个妹子貌似不安全，打个电话给猴子，去不去?一个字便足以回答所有。(我能说他们三个都互不认识么??他们三个都是我的朋友，可是互相都没有见过面，都不认识。。。)开始在网上看攻略，看机票，最后确定了从武汉往返曼谷，然后曼谷飞普吉，再飞清迈，清迈飞曼谷，曼谷回武汉的大致行程。给大家留点有用的东西吧~并不想说自己写的是攻略，只能说是游记，絮絮唠唠的游记。只是在记录我的一次旅程。我们此行在泰国是15天，武汉一天。所以总共行程是16天。先把行程发上来。由于我们有时间，所以行程设置的很松散，大部分时间自然醒，没有赶景点什么的，所以很多个上午都是睡觉度过的。。。。来到慢节奏的城市当然要慢下来。(虽然我生活的长沙也挺慢的，这跟学生身份有很大的关系吧~)第一天(3月20号)：早上高铁到武汉，下午樱花园，光谷。宿：武汉第二天(21号)：中午飞曼谷，晚上考山路。 宿：曼谷第三天(22号)：逛街，四面佛，siam广场。 宿：曼谷第四天(23号)：大皇宫，逛街。 宿：曼谷第五天(24号)：下午飞普吉，晚上沙滩玩耍。 宿：普吉芭东第六天(25号)：PP岛一日游，晚上人妖表演。 宿：普吉芭东第七天(26号)：租摩托车在岛上迷路，去神仙半岛。 宿：普吉芭东第八天(27号)：下午逛江西冷，晚上飞清迈。 宿：清迈第九天(28号)：下午去PAI。 宿：PAI第十天(29号)：coffee in love，二战桥，瀑布，云南村。 宿：PAI第十一天(30号)：发呆发呆发呆发呆发呆发呆发呆发呆 宿：PAI第十二天(31号)：回清迈，晚上周末夜市。 宿：清迈第十三天(4月1号)：大象丛林飞跃一日游 千人火锅 宿：清迈第十四天(4月2号)：素贴山，清迈大学，iberry 宿：清迈第十五天(4月3号)：机场旁边商场，下午飞曼谷。 宿：曼谷机场第十六天(4月4号)：清早回武汉。各回各家，各找各妈。行前准备机票：飞东南亚的国家当然首选亚航。亚航虽便宜，但是行李托运，吃的都是不免费的。我带了个28的大箱子，露露一个24的箱子，敏敏一个20的箱子。20寸的是可以带上飞机的，虽然说有限制7KG，可是我们5飞都没有查过手拖行李的重量。不过不能带超过100ML的液体上飞机。我跟露露买了托运，前面三趟是两个人一起买了25KG的行李，后面两趟是每人20KG。(一张行李票可以几个箱子，只要重量不超过就可以了)提前一个半月订的机票，没有赶上亚航的大促或者小促，所以价格相对廉价航空来说算贵，不过相当于普通航空来说算便宜。亚航的机票只能够在亚航官网订，支持支付宝。3月21号：武汉-曼谷12:10-15:10 974元。3月24号：曼谷-普吉14:40-16:10 358元。3月27号：普吉-清迈19:20-21:15 505元。4月3号：清迈-曼谷16:25-17:40 188元。4月4号：曼谷-武汉07:25-11：35 1022元。加上行李托运310。总共3400左右。护照：由于四个屌丝都是第一次出国，所以护照我们都是寒假办好的，由于过年的原因，我们开学的时候差不多都拿到了护照。办护照带上身份证和户口本到户口当地的公安局办理即可，当然，别忘了带上钱。护照是200.然后拍照啊什么的几十块钱吧，我记不大清了~~~~如果需要邮寄还要外加邮寄的费用。签证：淘宝上面一抓一大把。我办的是佰程的，出签还挺快。去淘宝搜佰程即可。258一人。保险：搭着签证一起买的。买的美亚的15天境外险。100一人。', '0', '1422235029', '0');
INSERT INTO `rd_love` VALUES ('8', '黑龙江', 'Uploads/Love/54c595f7c6609.jpg', '中国北京中国北京', '小妞', '在泰的十五天。曼谷、在泰的十五天。曼谷、在泰的十五', '我对住宿两个要求，干净，位置好。这次所有订的酒店位置都很好，而且没有发现什么不干净的地方。全程在BOOKING上预定，用信用卡担保，到当地用泰铢付款。不过这里要注意，如果预定酒店的时候上面写着不退款，那么就会事先在你信用卡里面扣钱的，到当地就不要付款了。我们芭东的酒店就事先扣钱了，然后我弄了很久才弄清楚到当地不用付钱了也就放心了。', '就没什么噪音了。前台会说一点中文。普吉，第一次来所以还是定了芭东，因为东西多，选择性大，下次如果去的话可能会选择卡塔海滩。订的是离酒吧街很近的ACCA patong，这次行程最好的也是最贵的酒店，位置很好，前面那条街还很吵，走过来一点点就不吵了，离江西冷和海边都很近。300多一晚一间~~清迈，订的塔佩门门口的Lanna house，位置没的说，不过没有清迈的那种小花园的住宿。120多一个晚上。PAI县，订的离汽车站很近的the sylvana PAI。独栋小别墅，位置没的说，各个方面都没得说，性价比最高，就是水压有点小~~双床房150一个晚上，大床房190一个晚上。四家酒店都有WIFI，曼谷的基本不能上，普吉的网速最快，清迈的网速也可以，PAI的时快时慢。汇率：不知道是泰囧的原因还是最近赴泰游比较火热，汇率都超低。让我等情何以堪???去之前准备在中国银行换点泰铢，结果预约都是三个月之后的事情〜我个人觉得最划算的是办华夏银行的卡，在当地取第一笔免手续费，但是当地银行会收50泰铢手续费。取1000是50B，取10000也是50B，不看金额的，只看次数。我们第一天取钱的汇率大概是4.66。我之后取钱是4.63。低到哭。。后来在机场免税店身上没有泰铢了，又想买东西换钱汇率是4.3。。。。华夏银行很好玩，在武汉我们妹子在逛街的时候，猴子到处乱逛，然后看到华夏银行，里面有自动办卡机，猴子把身份证一验证，对着镜头一笑，卡就出来了。。。真快。。。于是我们集体怀疑是假的。。。悲剧的事情来了，猴子把卡放在屁股后面，然后屁股一坐，卡弯了。。弯了。。。不过幸好事后掰平后还能用。。。。我还用工行取过一次钱，汇率是4.63，手续费收的坑爹，4000泰铢收了我30多手续费。一千泰铢收了10多块钱。。在清迈我们换了一次钱，没去找superrich，在塔佩门门口亚航后面有个黄色的换钱的地方，汇率是4.63。还不算太坑爹。其他行前准备：在淘宝的普吉趴趴走定了普吉的接机。119单程~~西蒙的人妖秀109一人。PP岛一日游255一人。总共花费：机票，3400左右。长沙到武汉高铁学生票120多。住宿，15个晚上，人均下来1300左右。(到当地付)护照签证保险，600左右。一日游加接送，424一人。出发之前花费了5100多~在泰国十五天除开购物花费是5000多~购物5000左右~(请剁了我的手!!)总共1W5左右。这次已经完完全全的超出了我的预支。剁手!!事后写检讨书。开始吧~~边回忆边写感受。--------------------------------------请叫我分割线-----------------------------------武汉篇第一天：买了早上9：44的高铁~~然后说好9点和猴子，敏敏在高铁站汇合(露露从常德直接去武汉)，结果九点了还没有一个人在高铁站~~然后我发现形势不对，我少估算了我们学校到高铁站的时间。。。尽管后来紧赶慢赶的打了个的过去可还是眼睁睁的看着火车走。。。。好吧~~幸好这不是飞机，改签了下一趟，坐等到武汉。。到武汉火车站，下车打的到光谷，45左右，来到武汉光谷步行街店的7天~放了行李，等我朋友来带我们三去吃饭，然后逛街等露露。来了后打个的去磨山樱花园。。一下车就把我们震惊了。。。。四个人大声的“哇”起来~~没见过世面的人确实不同~~哈哈哈哈请亲切的呼唤我们共同的名字~~屌丝~~看到这么多樱花确实很激动~~磨山樱花园还是要收门票的。。。全价60，学生30~~检查学生证很松，我们一个学生证买了4张票~~不过30也确实是有点贵。。上图~~', '0', '1422235127', '0');
INSERT INTO `rd_love` VALUES ('9', '济州岛春节四日游', 'Uploads/Love/54c596a1ba589.jpg', '济州岛春节四日游 ', '小妞儿', '春节长假觉得都宅在家里没什么意思，儿子开始上小学了', '春节长假觉得都宅在家里没什么意思，儿子开始上小学了，平时没时间出去玩，难得有个寒假，于是提前一个多月全家决定春节出去玩几天。老婆想去济州岛，我对比了几个旅行社的报价和网上的报价，感觉行程和景点几乎都一样，价格是途牛网的报价低一些，每人可以省三四百元钱，于是马上订了途牛网大年初一出发的济州岛四日三晚团队游。\r\n', '大年初四下午济州岛时间五点半从济州岛起飞，北京时间下午五点五十左右到杭州，实际上来回是同一架飞机，飞机在济州岛机场停留一小时就返回杭州。我们去的飞机还比较准时，回来的飞机晚点一小时起飞。领队为我们填好了入境单，海关申报单领队投篮整个团以某个旅客的名义填了一张，结果到济州岛机场我们拿到行李想先出去因手里没有申报单被拦住了，不得已胡乱填了一张，反正也没有可申报的物品。在济州机场等行李时，工作人员牵着一只狗嗅每件行李，我等的十几分钟内有三个箱子被狗狗怀疑，需要打开人工检查。我想多拍几张狗狗的照片被工作人员制止了。在济州岛上四天都是同一辆大巴包车，司机是韩国人，不会说中国话。关于这辆大巴有两件趣事，第一件是第二天早上有三名其他团的旅客上了我们的车，开出五分钟才发现不对，我们的导游只能给他们叫出租车来接回去；第二件是最后一天去汉拿山，车没停在路边，到路边马场掉头结果被陷在雪里，这个车的后轮磨损太严重，我们帮忙推车也出不来，最后只能电话找拖车求救，前后折腾了一小时。大年初四下午济州岛时间五点半从济州岛起飞，北京时间下午五点五十左右到杭州，实际上来回是同一架飞机，飞机在济州岛机场停留一小时就返回杭州。我们去的飞机还比较准时，回来的飞机晚点一小时起飞。领队为我们填好了入境单，海关申报单领队投篮整个团以某个旅客的名义填了一张，结果到济州岛机场我们拿到行李想先出去因手里没有申报单被拦住了，不得已胡乱填了一张，反正也没有可申报的物品。在济州机场等行李时，工作人员牵着一只狗嗅每件行李，我等的十几分钟内有三个箱子被狗狗怀疑，需要打开人工检查。我想多拍几张狗狗的照片被工作人员制止了。在济州岛上四天都是同一辆大巴包车，司机是韩国人，不会说中国话。关于这辆大巴有两件趣事，第一件是第二天早上有三名其他团的旅客上了我们的车，开出五分钟才发现不对，我们的导游只能给他们叫出租车来接回去；第二件是最后一天去汉拿山，车没停在路边，到路边马场掉头结果被陷在雪里，这个车的后轮磨损太严重，我们帮忙推车也出不来，最后只能电话找拖车求救，前后折腾了一小时。', '0', '1422235297', '0');
INSERT INTO `rd_love` VALUES ('10', '三亚亚龙湾', 'Uploads/Love/54c597226bd21.jpg', '三亚亚龙湾', '小牛人', '在韩国的街头几乎都是用三星手机的，iphone很少', '在韩国的街头几乎都是用三星手机的，iphone很少见，连卖手机壳的小店里都是五花八门的三星手机壳，设计的那叫一个精巧，大部分卖的都是note2的壳，可爱的让我恨不得把它们全抱回家(但是我的手机是iphone)，只有在角落里才能找到几个iphone手机壳，也不怎么好看。本来想给同事带个三星i9300的壳，但是因为语言不通，最终还是放弃了。\r\n', '在游记之前先介绍一些韩国的情况吧。回来之后很多人都问我，韩国是不是满街都是美女?真实的韩国街头是这样的，美女是很多，不过都是画着很浓的妆画出来的美女，真实什么样子已经看不出来了，眼线、眼影、假睫毛全副武装。可能在镜头前看不觉得妆很浓，但是现实在街上看到，真的觉得她们都跟带了一个面具一样。不过韩国女人的化妆技术真的很纯熟、很好，害的我也不得不每天都画眼线涂上睫毛膏，一上街，还是觉得自己化妆技术那叫一个拙劣啊，都不想看到自己了……韩国的女人身材大部分都很好，很瘦很瘦，剩下一小部分就是非常胖的那种，但凡看到一个普通身材(比如我)的女孩子，肯定不是韩国人。我问某人，为什么韩国没有中等身材的女孩子呢?某人说，她们估计要么拼命减肥，要么就放弃了，自暴自弃了吧。在韩国不管男女老少都化妆，老大妈也都把脸涂得雪白，穿着校服的学生也画着妆。但是学生有另一个特点，再冷天气他们也穿裙子，而且肯定不穿丝袜，然后她们一般都拥有一双小黑腿。没化妆的学生也有，真心不怎么好看。在发型上，韩国女孩子和韩国大妈们都有高度的统一性。韩国年轻女人大部分都是黄色的蛋卷头，要么就是扎起来的包包头。韩国的大妈大部分都是烫的很短的卷发，类似于爆炸头，韩剧里经常能看到，满大街的韩国大妈都这个发型。相反的，韩国的男人很让我惊喜，街上看到的韩国的男人大部分长得都很清秀，很斯文，很帅，身高也普遍较高，身材修长，不要太养眼。一比较起来，某人和同团的另外两名上海男人瞬间都要挫多了，感觉不是一个级别的，气质和气场上差的就不是一点点啊。所以根据小萌预估，他们肯定也都化妆了，起码涂了BB霜什么的。在游记之前先介绍一些韩国的情况吧。回来之后很多人都问我，韩国是不是满街都是美女?真实的韩国街头是这样的，美女是很多，不过都是画着很浓的妆画出来的美女，真实什么样子已经看不出来了，眼线、眼影、假睫毛全副武装。可能在镜头前看不觉得妆很浓，但是现实在街上看到，真的觉得她们都跟带了一个面具一样。不过韩国女人的化妆技术真的很纯熟、很好，害的我也不得不每天都画眼线涂上睫毛膏，一上街，还是觉得自己化妆技术那叫一个拙劣啊，都不想看到自己了……韩国的女人身材大部分都很好，很瘦很瘦，剩下一小部分就是非常胖的那种，但凡看到一个普通身材(比如我)的女孩子，肯定不是韩国人。我问某人，为什么韩国没有中等身材的女孩子呢?某人说，她们估计要么拼命减肥，要么就放弃了，自暴自弃了吧。在韩国不管男女老少都化妆，老大妈也都把脸涂得雪白，穿着校服的学生也画着妆。但是学生有另一个特点，再冷天气他们也穿裙子，而且肯定不穿丝袜，然后她们一般都拥有一双小黑腿。没化妆的学生也有，真心不怎么好看。在发型上，韩国女孩子和韩国大妈们都有高度的统一性。韩国年轻女人大部分都是黄色的蛋卷头，要么就是扎起来的包包头。韩国的大妈大部分都是烫的很短的卷发，类似于爆炸头，韩剧里经常能看到，满大街的韩国大妈都这个发型。相反的，韩国的男人很让我惊喜，街上看到的韩国的男人大部分长得都很清秀，很斯文，很帅，身高也普遍较高，身材修长，不要太养眼。一比较起来，某人和同团的另外两名上海男人瞬间都要挫多了，感觉不是一个级别的，气质和气场上差的就不是一点点啊。所以根据小萌预估，他们肯定也都化妆了，起码涂了BB霜什么的。', '5', '1422235426', '0');
INSERT INTO `rd_love` VALUES ('11', '北京郊区', 'Uploads/Love/54c5979a48a11.jpg', '北京第二外国语学院', '哈哈哈哈', '大年初四下午济州岛时间五点半从济州岛起飞，北京时间', '领队为我们填好了入境单，海关申报单领队投篮整个团以某个旅客的名义填了一张，结果到济州岛机场我们拿到行李想先出去因手里没有申报单被拦住了，不得已胡乱填了一张，反正也没有可申报的物品。在济州机场等行李时，工作人员牵着一只狗嗅每件行李，我等的十几分钟内有三个箱子被狗狗怀疑，需要打开人工检查。\r\n\r\n我想多拍几张狗狗的照片被工作人员制止了。在济州岛上四天都是同一辆大巴包车，司机是韩国人，不会说中国话。\r\n', '领队为我们填好了入境单，海关申报单领队投篮整个团以某个旅客的名义填了一张，结果到济州岛机场我们拿到行李想先出去因手里没有申报单被拦住了，不得已胡乱填了一张，反正也没有可申报的物品。在济州机场等行李时，工作人员牵着一只狗嗅每件行李，我等的十几分钟内有三个箱子被狗狗怀疑，需要打开人工检查。我想多拍几张狗狗的照片被工作人员制止了。在济州岛上四天都是同一辆大巴包车，司机是韩国人，不会说中国话。在度假村的大堂看到一台可以上网的电脑，都是韩文，折腾了十分钟才可以用拼音输入法输入中文，上网发了条微博。第二天和第三天晚上住在济州市新城区的Hotel Neighborhood Jeju，设施比Shineville Luxury Resort稍差，也旧一点，主要是卫生间比较小，从房间可以看到济州机场，但晚上睡觉没感觉到飞机的干扰。这个酒店的好处的附近比较繁华，出门右转几分钟就可走到易买得超市和乐天超市。酒店后面也有一些饭店可以吃饭。在度假村的大堂看到一台可以上网的电脑，都是韩文，折腾了十分钟才可以用拼音输入法输入中文，上网发了条微博。第二天和第三天晚上住在济州市新城区的Hotel Neighborhood Jeju，设施比Shineville Luxury Resort稍差，也旧一点，主要是卫生间比较小，从房间可以看到济州机场，但晚上睡觉没感觉到飞机的干扰。这个酒店的好处的附近比较繁华，出门右转几分钟就可走到易买得超市和乐天超市。酒店后面也有一些饭店可以吃饭。', '0', '1422235546', '0');
INSERT INTO `rd_love` VALUES ('12', '三亚亚龙湾', 'Uploads/Love/54c5982c5fe8d.jpg', '呵呵呵哈啊', '小鸟儿', '导游还说，过去在韩国有三星、现代、LG三大集团，不', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地这个游记帖子拖得略久。。。 我的微博：@多啦C梦的口袋泰国，永远不会想和它说再见，去过一次后还会想再去（我去过两次泰国，估计今年年底或者明年初还会再去那里），尤其是被誉为泰北玫瑰的清迈和泰北小瑞士的pai县。这里有着舒适的慢节奏任你睡到自然醒，有着开满鲜花的小路任你溜达，有着数不尽的寺庙任你朝拜，有着新鲜美味的东南亚美食任你品尝，当然还有热情好客的泰国人民总会双手合十微笑着对你说 萨瓦迪卡。 煽情完毕！开始流水账啦：[签证]：提前在淘宝找旅行社代办的，以前是把护照和照片快递过去就好了。不知道现在泰国签证有没有变，因为之前听说是泰国签证改政策了，要开始自己去使馆申请了。。[货币]：在国内我没有去兑换。因为我办理的是华夏银行的丽人卡（这卡长得真的很丑），每天境外前十笔取款可以免手续费，限额1w。不同分行有不同政策，华夏银行的某些分行是每天第一笔免手续费.不过我发现曼谷机场的取款机，都会收取手续费即使我用的是免手续费的卡，所以还是可以提前换点，抵达机场后打车可以用。 号外：自2013年9月后，好像是泰国那边开始收atm机的取款手续费了。。。[摄影装备]：5d2+35L+135L+适马12-24（这么多装备，重不重？？当然重！！！但是没办法，这是我工作的必备工具呀！）[交通]： 国内--》曼谷：国内很少有直飞清迈的，所以一般都会先去曼谷。一般淡季的时候，往返曼谷加完税大概2000多，旺季（国内冬季）大约3000多往返。 曼谷--》清迈：曼谷到清迈，有些朋友会选择坐火车，如果时间很多，可以去体验下泰国的火车。时间短暂的话，还是飞机吧。可以买亚航的机票，也可以购买泰国航空的，大约单程加完税300-700吧。。这个价格只能看实情啦。曼谷有两个机场，一个是新的机场 SUVARNABHUMI 素旺那浦机场，但是亚航的航班一般都是在旧机场廊曼机场。所以大家一定要弄清楚自己抵达和出发的机场哦！ 清迈--》拜县（pai）：pai读拜，因为你给泰国人讲派县，他们听不懂。。他们发音为拜县。从清迈到pai县有飞机（小飞机），每天只有一趟航班，早上十点出发。时间很不灵活。除了飞机，可以选择做mini bus，大约三个多小时车程。车票可以找旅行社或者酒店帮你预定。从清迈出发的票价大约150-180泰铢，到了pai县的aya centre （mini bus就停在这里）后，可以立马订好回清迈的票，登记好名字和时间就好啦，没有纸质票，票价是150泰铢。[住宿]：泰国的住宿性价比真的非常高！！！！有些五星的价格也不贵，还有很多两三百元的酒店也很&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;嗲！！&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp; 曼谷：Bangkok City Hotel (离捷运站不远，性价比高，自助早餐)、铂尔曼皇权酒店（楼下旁边就是一个免税商店）&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp; 清迈：Eurana Boutique Hotel（清迈古城内，酒店环境不错，自助早餐也很丰盛）&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;香格里拉酒店（到古城有几公里左右）&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp; pai县：Pai Vimaan Resort（木质结构的房屋，独幢的小木屋也很舒服，走路几分钟就能到pai县的中心街道）&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;第一次到泰国是去年的9月，正值泰国的雨季。第二次是今年2月初从尼泊尔飞的泰国，冬天的时候去泰国气候更适宜。不过9月雨季第一次去泰国的时候我们特别幸运，只在曼谷感受了一场暴雨，从杭州出发乘坐的是港龙航空的飞机，在香港机场转机。抵达曼谷已经是傍晚，出机场后打车到了酒店。出租车司机告诉我们，最近每天都是下午一两点开始下场暴雨。其实这样也挺好，降降温。', '4', '1422235692', '0');
INSERT INTO `rd_love` VALUES ('13', '北京中国', 'Uploads/Love/54c59c7ac3c6b.jpg', '中国北京中国北京', '小鸟儿', '虔诚礼佛，阳光海滩，美食美景，一切“泰”美丽', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '0', '1422236794', '0');
INSERT INTO `rd_love` VALUES ('14', '北京中国', 'Uploads/Love/54c59c903928d.jpg', '中国北京中国北京', '小鸟儿', '虔诚礼佛，阳光海滩，美食美景，一切“泰”美丽', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '0', '1422236816', '0');
INSERT INTO `rd_love` VALUES ('15', '北京中国', 'Uploads/Love/54c59ca3c785d.jpg', '中国北京中国北京', '小鸟儿', '虔诚礼佛，阳光海滩，美食美景，一切“泰”美丽', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '7', '1422236835', '0');
INSERT INTO `rd_love` VALUES ('16', '北京中国哦', 'Uploads/Love/54c59cb2163b5.jpg', '中国北京中国北京', '小鸟儿', '虔诚礼佛，阳光海滩，美食美景，一切“泰”美丽', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '14', '1422236850', '0');
INSERT INTO `rd_love` VALUES ('17', '北京中国哦', 'Uploads/Love/54c59ccaaf686.jpg', '中国北京', '小男儿', '虔诚礼佛，阳光海滩，美食美景，一切“泰”美丽', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '16', '1422236874', '0');
INSERT INTO `rd_love` VALUES ('18', '北京中国哦', 'Uploads/Love/54c59cee36cf5.jpg', '中国北京', '小男儿', '虔诚礼佛，阳光海滩，美食美景，一切“泰”美丽', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地', '她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，她是庙宇林立的千佛之国，在这里信仰为上。回转在黎明寺、法身寺、清曼寺之间，到处是金碧辉煌、尖角高耸的庙宇;无处不有精致美观的佛像、石雕和绘画;恭敬礼拜、听道闻法，寂然静坐中感悟“大乘人间”，潜心冥想中等待迷失的灵魂;她拥有海岛、美食和独特的文化，她是一个天生的旅游国度。松软的沙滩上，携手恋人晒个日光浴，只为享受一个安静的下午;抑或潜入清凉的海底，拥抱大海，和水下的五彩鱼儿道声你好;干脆懒散地躺下，打个小盹儿，全身心地放松在古代泰国皇族的独特按摩之中，烦恼全无;最后还要美美地煽情完毕！开始流水账啦：[签证]：提前在淘宝找旅行社代办的，以前是把护照和照片快递过去就好了。不知道现在泰国签证有没有变，因为之前听说是泰国签证改政策了，要开始自己去使馆申请了。。[货币]：在国内我没有去兑换。因为我办理的是华夏银行的丽人卡（这卡长得真的很丑），每天境外前十笔取款可以免手续费，限额1w。不同分行有不同政策，华夏银行的某些分行是每天第一笔免手续费.不过我发现曼谷机场的取款机，都会收取手续费即使我用的是免手续费的卡，所以还是可以提前换点，抵达机场后打车可以用。 号外：自2013年9月后，好像是泰国那边开始收atm机的取款手续费了。。。', '14', '1422236910', '0');
INSERT INTO `rd_love` VALUES ('19', '上海人', 'Uploads/Love/54c59d5a365d6.jpg', '泰北玫瑰与小瑞士，永远不说再见（NanC', '上海人', '泰国，永远不会想和它说再见，去过一次后还会想再去（', '泰国，永远不会想和它说再见，去过一次后还会想再去（我去过两次泰国，估计今年年底或者明年初还会再去那里），尤其是被誉为泰北玫瑰的清迈和泰北小瑞士的pai县。这里有着舒适的慢节奏任你睡到自然醒，有着开满鲜花的小路任你溜达，有着数不尽的寺庙任你朝拜，有着新鲜美味的东南亚美食任你品尝，当然还有热情好客的泰国人民总会双手合十微笑着对你说 萨瓦迪卡。\r\n', '煽情完毕！开始流水账啦：[签证]：提前在淘宝找旅行社代办的，以前是把护照和照片快递过去就好了。不知道现在泰国签证有没有变，因为之前听说是泰国签证改政策了，要开始自己去使馆申请了。。[货币]：在国内我没有去兑换。因为我办理的是华夏银行的丽人卡（这卡长得真的很丑），每天境外前十笔取款可以免手续费，限额1w。不同分行有不同政策，华夏银行的某些分行是每天第一笔免手续费.不过我发现曼谷机场的取款机，都会收取手续费即使我用的是免手续费的卡，所以还是可以提前换点，抵达机场后打车可以用。 号外：自2013年9月后，好像是泰国那边开始收atm机的取款手续费了。。。[摄影装备]：5d2+35L+135L+适马12-24（这么多装备，重不重？？当然重！！！但是没办法，这是我工作的必备工具呀！）[交通]： 国内--》曼谷：国内很少有直飞清迈的，所以一般都会先去曼谷。一般淡季的时候，往返曼谷加完税大概2000多，旺季（国内冬季）大约3000多往返。 曼谷--》清迈：曼谷到清迈，有些朋友会选择坐火车，如果时间很多，可以去体验下泰国的火车。时间短暂的话，还是飞机吧。可以买亚航的机票，也可以购买泰国航空的，大约单程加完税300-700吧。。这个价格只能看实情啦。曼谷有两个机场，一个是新的机场 SUVARNABHUMI 素旺那浦机场，但是亚航的航班一般都是在旧机场廊曼机场。所以大家一定要弄清楚自己抵达和出发的机场哦！ 清迈--》拜县（pai）：pai读拜，因为你给泰国人讲派县，他们听不懂。。他们发音为拜县。从清迈到pai县有飞机（小飞机），每天只有一趟航班，早上十点出发。时间很不灵活。除了飞机，可以选择做mini bus，大约三个多小时车程。车票可以找旅行社或者酒店帮你预定。从清迈出发的票价大约150-180泰铢，到了pai县的aya centre （mini bus就停在这里）后，可以立马订好回清迈的票，登记好名字和时间就好啦，没有纸质票，票价是150泰铢。[住宿]：泰国的住宿性价比真的非常高！！！！有些五星的价格也不贵，还有很多两三百元的酒店也很&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;嗲！！&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp; 曼谷：Bangkok City Hotel (离捷运站不远，性价比高，自助早餐)、铂尔曼皇权酒店（楼下旁边就是一个免税商店）&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp; 清迈：Eurana Boutique Hotel（清迈古城内，酒店环境不错，自助早餐也很丰盛）&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;香格里拉酒店（到古城有几公里左右）', '11', '1422237018', '0');
INSERT INTO `rd_love` VALUES ('20', '海南三亚', 'Uploads/Love/54c5e441ac318.jpg', '千古情留住你的心', '小雨儿', '致每一个曾因为这个世界感到迷茫，因为这个世界差一点', '致每一个曾因为这个世界感到迷茫，因为这个世界差一点放弃自己的你。致每一个曾因为这个世界感到迷茫，因为这个世界差一点放弃自己的你。致每一个曾因为这个世界感到迷茫，因为这个世界差一点放弃自己的你。致每一个曾因为这个世界感到迷茫，因为这个世界差一点放弃自己的你。界差一点放弃自己的你。致每一个曾因为这个世界感到迷茫，因为这个世界差一点放弃自己的你。', '<p>同桌是一个小女孩，那天她穿着一双很旧的白色网球鞋，鞋子布满了污渍和灰尘，这双鞋从我坐在她旁边时她便一直没换过，来到教室的时候她看着我脚下的鞋对我说，鞋子真好看。下课时一些小伙伴来看我的新鞋子，我心里开心又骄傲。可我注意到同桌的小女孩一整天总是在把自己的脚往椅子后面缩，她显得很不自在。&nbsp;晚上回到家，我把鞋子脱下来对妈妈说，“这双鞋我不穿了，有点挤脚”妈妈诧异的过来问我“怎么会挤脚呢，你今天早上穿的时候不是很合适吗”我把鞋子踢一边，“就是不合脚，明天我要穿那双旧球鞋”，妈妈拗不过也没再说什么。同桌是一个小女孩，那天她穿着一双很旧的白色网球鞋，鞋子布满了污渍和灰尘，这双鞋从我坐在她旁边时她便一直没换过，来到教室的时候她看着我脚下的鞋对我说，鞋子真好看。下课时一些小伙伴来看我的新鞋子，我心里开心又骄傲。可我注意到同桌的小女孩一整天总是在把自己的脚往椅子后面缩，她显得很不自在。&nbsp;晚上回到家，我把鞋子脱下来对妈妈说，“这双鞋我不穿了，有点挤脚”妈妈诧异的过来问我“怎么会挤脚呢，你今天早上穿的时候不是很合适吗”我把鞋子踢一边，“就是不合脚，明天我要穿那双旧球鞋”，妈妈拗不过也没再说什么。</p><p><img src=\"/rd/Public/Uploads/Love/54c5e41fcd2af.jpg\" height=\"500\" width=\"600\" alt=\"\" /><br /></p>', '10', '1422255169', '0');

-- ----------------------------
-- Table structure for `rd_marriager`
-- ----------------------------
DROP TABLE IF EXISTS `rd_marriager`;
CREATE TABLE `rd_marriager` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `sex` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `tid` int(11) DEFAULT '3',
  `detail` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_marriager
-- ----------------------------
INSERT INTO `rd_marriager` VALUES ('6', '朗艺北京主持人晨风 ', '0', '28', '183', '54bcb70777810.jpeg', '黑龙江', '4006', '0', '居住：北京身高：1米83所属朗艺北京主持人团队！作为一名职业的婚礼人,从业5年来很荣幸能够一直站在这个舞台上,见证每一对新人的幸福结合.感受着属于她们的爱情故事,一次次的体会幸福瞬间美丽绽放.');
INSERT INTO `rd_marriager` VALUES ('7', '明辉 ', '0', '36', '176', '54bcb870db087.jpg', '中国北京', '2147483647', '0', '明辉，80后，婚礼的舞台上只为了心中永恒的梦想，为梦想不懈追求，只为见证牵手的誓言，超磁性的嗓音');
INSERT INTO `rd_marriager` VALUES ('8', '优尚励合团队曹寓腾', '0', '30', '168', '54bcb9e2cce96.jpg', '中国', '13645326789', '0', '普通话一级甲等中国婚庆产业集团高级讲师中华婚庆网主持人培训讲师传媒大学凤凰学院婚礼主持培训讲师专职主持人，03年始主持各类商演、会议数百场，世界五百强企业大型会议、晚会主持人05年从事婚礼主持工作，主持婚礼2000余场擅长各种主题婚礼及多种婚礼形式 中式 西式 汉唐等2008年天津市婚庆主持人大赛“十佳婚庆主持人”荣誉称号。');
INSERT INTO `rd_marriager` VALUES ('9', '星娱主持汇张坤', '0', '27', '167', '54bcbb375e6ed.jpg', '中国北京', '13823671189', '0', '&lt;p class=&quot;pt10&quot;&gt;策划型婚礼主持人，毕业于中国传媒大学，数百场主持经验，为新人专属作词，配乐，根据客户要求来定义风格。&lt;/p&gt;');
INSERT INTO `rd_marriager` VALUES ('10', '万里婚礼团队创始人万里', '0', '35', '164', '54bcbc1415964.jpg', '北京', '4006-054-520', '0', '&lt;p class=&quot;pt10&quot;&gt;主持风格：庄重、典雅、不失幽默。          用激情与理性感受温馨与浪漫，用心灵与聆听描绘融合与经典。          策划个性婚礼，彰显新人各自精彩瞬间。触摸心底，感受沟通！&lt;/p&gt;');
INSERT INTO `rd_marriager` VALUES ('15', 'LISEMAKEUP造型师黎斯', '0', '28', '177', '54c1091c3e625.jpg', '朝阳', '1394853703', '1', '造型师黎斯。专注于时尚化妆造型，于2014年创办旗下工作室LISE MAKEUP利斯造型。化妆风格唯美大气，思想紧跟潮流。王丽坤 ，李静 ，高瑜 ，旺姆 ，付磊 ，亦涵 ，孙佳梵 等艺人都是我们合作过的艺人；此外我们还与众多一线杂志保持合作关系。LISE MAKEUP此次跟易结独家合作旨在为大众提供平价的明星级化妆服务，让更多人享受完美的新娘造型^ ^\r\n');
INSERT INTO `rd_marriager` VALUES ('12', '主持人 谢添', '0', '26', '181', '54bffe1d16e84.jpg', '朝阳', '138994321455', '0', '&lt;p class=&quot;pt10&quot;&gt;他曾在高中以艺术特长生考入四川电影电视学院 成为谢娜 李佳明 杨乐乐同门师弟 毕业后考入中国传媒大学研究生•	他曾在大三就被世界500强企业华侨城集团看中 被聘请到华侨城集团担任大型活动策划 •	 他是贵州卫视.....&lt;/p&gt;');
INSERT INTO `rd_marriager` VALUES ('14', '娃娃造型化妆师梦君', '1', '27', '165', '54c0fcd7be67c.jpg', '朝阳', '138994321455', '1', '化妆师梦君，毕业于中影影视全科班！曾担任北京电视台春晚化妆师，天津卫视天下无双栏目化妆师，开心麻花旗下化妆师！ ');
INSERT INTO `rd_marriager` VALUES ('16', 'Likefilm婚礼电影工作室 ', '0', '33', '183', '54c115c767c40.jpg', '朝阳', '138994321455', '2', 'Likefilm凭着对技术、品质的高要求、不断努力， 短短3年时间，已经成为国内顶尖的婚礼摄像团队。2015年，Likefilm进入了一个更全面、更专业、更大规模、更有体系的发展新纪元，目前已拥有数十名经验丰富的摄像师和剪辑师，就此Likefilm不断吸取更多的拍摄手法，不断追求更高的硬件配置、更全面的服务、更适合新人的顶级体验。');
INSERT INTO `rd_marriager` VALUES ('17', '菲菲 策划师', '1', '25', '164', '54c13576395b8.jpg', '朝阳', '1394853703', '3', 'EN私人婚礼——首席婚礼策划师菲菲。 海外两年的活动策划经历，赋予了独特的视角和高效的执行力，致力于成为顶级的Wedding Planner， 擅长手工定制，务实认真的金牛座女生 ');
INSERT INTO `rd_marriager` VALUES ('18', '布置师 娜美', '1', '25', '164', '54c1b5c5099c9.jpg', '朝阳', '4006-054-520', '4', '我们没有什么不同 只是 对工作多了一些创意 对生活多了一些热爱 对美好多了一些追求 对爱情多了一些感悟 我们是 一群有意思的年轻人 在一起做一些有意思的事  趣是做好一件事情的秘诀——零八年从学习花艺步入婚礼这个行业，6年里陪伴几十对新人一起开心的办婚礼，除北京以外，在河北、辽宁、山西、江西也有我服务过的新人。一四年开始在龙之缘婚礼学院任策划班讲师，将自己擅长的婚礼整体统筹工作，从场地选择、婚纱礼服陪购、婚品推荐……经验分享给同样热爱婚礼的全国各地的策划师，希望婚礼人越来越专业，给新人们提供越来越人性化的服。\r\n\r\n');
INSERT INTO `rd_marriager` VALUES ('23', 'EN新电影一私人婚礼影像 ', '1', '44', '111', '54c5a3a37b3db.jpg', '宁夏的黄土高坡', '18622864597', '2', '为感动流泪，为真挚纪录，为影像之美好——EN新电影，你专属的婚礼影像团队。服务地区：华北地区 ');
INSERT INTO `rd_marriager` VALUES ('24', '策划师 苗苗', '1', '28', '178', '54c6465ec2cdf.jpg', '山东省潍坊市昌乐县', '18688889588', '3', '07年至今，一直服务于婚礼行业。 曾服务于多家业内知名机构，12年创立More & More多么工作室。 婚礼，派对，活动，展览，希望让一切人与人相聚的时光都能十分让人难忘， 拥有无止境潮流形式的贴心闺蜜式管家服务，希望能为你做的更多。\r\n\r\n');
INSERT INTO `rd_marriager` VALUES ('20', '时尚造型师奕煊 ', '1', '22', '167', '54c59aca855cd.jpg', '宁夏的黄土高坡', '18688889588', '1', '30+的年纪混迹时尚圈近十年。足迹遍布影视剧组，电视台，时尚秀场，艺人发布会等等，合作艺人：应采儿，林心如，郭晓冬，陆毅，倪虹洁，朱雨辰，乔振宇，体育明星林丹，马龙，中国跳水梦之队等');
INSERT INTO `rd_marriager` VALUES ('22', '95视觉影像工作室 ', '0', '33', '188', '54c5a026c99d8.jpg', '宁夏的黄土高坡', '18688889588', '2', '【95视觉影像工作室】－创立于2012年，是一家专注个人婚礼电影拍摄制作的影像团队，拍摄内容包括【婚礼跟拍】【爱情微电影】【求婚短片】【亲子短片】等所有您想要留下的瞬间，工作室拥有一支年');
INSERT INTO `rd_marriager` VALUES ('25', '布置师 任晓', '1', '29', '188', '54c64cb1973f7.jpg', '山东省潍坊市昌乐县', '18622864597', '4', '从业至今见证了几百对新人的幸福，秉承着不拼凑不复制的理念，专注于完美的细节体现和婚礼情感的表达。新人的亲情 、友情 、爱情都可以成为一场婚礼当中不可或缺的闪光点。我希望做新人的朋友,与你们一同分享甜蜜，一同享受婚礼带来的感动瞬间。\r\n\r\n');
INSERT INTO `rd_marriager` VALUES ('28', '布置师韩雪', '1', '28', '178', '54c65157d026c.jpg', '宁夏的黄土高坡', '18688889588', '4', '我工作室化妆总监2003年从业20006年成立工作室至今为多位艺人，主持人，模特做过形象设计·帮助数千新娘制定婚礼整体造型理念时尚！脱俗！喜欢时尚个性的您快快与我们取得联系吧！ ');

-- ----------------------------
-- Table structure for `rd_order`
-- ----------------------------
DROP TABLE IF EXISTS `rd_order`;
CREATE TABLE `rd_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `linkman` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(32) DEFAULT NULL,
  `zipcode` int(6) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(16) NOT NULL DEFAULT '',
  `addtime` int(11) DEFAULT NULL,
  `all-price` decimal(10,2) DEFAULT NULL,
  `gids` varchar(50) DEFAULT NULL,
  `totals` varchar(50) DEFAULT NULL,
  `issure` tinyint(1) NOT NULL DEFAULT '0',
  `issend` tinyint(1) NOT NULL DEFAULT '0',
  `ispay` tinyint(1) NOT NULL DEFAULT '0',
  `ident` char(40) DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `paytime` int(11) NOT NULL,
  `suretime` int(11) NOT NULL,
  `sendtime` int(11) DEFAULT NULL,
  `isgets` tinyint(2) NOT NULL DEFAULT '0',
  `getstime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_order
-- ----------------------------
INSERT INTO `rd_order` VALUES ('1', '29', 'xiaohongwei', '卡梅伦', '123456@qq.com', '677777', '美国宁夏省', '18688889588', '1422320334', '1136.00', '14', '2', '0', '0', '1', '1422320334597', '112', '1422320342', '0', null, '0', null);
INSERT INTO `rd_order` VALUES ('2', '29', 'xiaohongwei', '卡梅伦', '123456@qq.com', '677777', '美国宁夏省', '18688889588', '1422320367', '58.00', '2', '1', '1', '1', '1', '1422320367264', '5', '1422320375', '1422320393', '1422320416', '1', '1422320431');

-- ----------------------------
-- Table structure for `rd_orderdet`
-- ----------------------------
DROP TABLE IF EXISTS `rd_orderdet`;
CREATE TABLE `rd_orderdet` (
  `orderid` int(11) DEFAULT NULL,
  `goodsid` int(11) DEFAULT NULL,
  `buynum` int(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_orderdet
-- ----------------------------
INSERT INTO `rd_orderdet` VALUES ('1', '14', '2');
INSERT INTO `rd_orderdet` VALUES ('2', '2', '1');

-- ----------------------------
-- Table structure for `rd_photos`
-- ----------------------------
DROP TABLE IF EXISTS `rd_photos`;
CREATE TABLE `rd_photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `xname` varchar(50) NOT NULL,
  `uid` int(11) NOT NULL,
  `ctime` int(11) DEFAULT NULL,
  `path` varchar(25) NOT NULL,
  `pid` int(11) NOT NULL,
  `uname` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=122 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_photos
-- ----------------------------
INSERT INTO `rd_photos` VALUES ('58', '主持人晨风的相册', '主持人', '6', '1421657084', '0', '0', '朗艺北京主持人晨风');
INSERT INTO `rd_photos` VALUES ('59', '主持人晨风的作品', '晨风作品', '6', '1421657143', '0-58', '58', '朗艺北京主持人晨风');
INSERT INTO `rd_photos` VALUES ('60', '私人定制 主题婚礼 婚礼不是一种形式，而是一种态度！是亲情 友情 爱情的完美融合。。用语言的艺术，为您续写爱的美丽瞬间！', ' 晨风 主题婚礼 爱的第五季', '6', '1421666563', '0-58-59', '59', '朗艺北京主持人晨风');
INSERT INTO `rd_photos` VALUES ('61', '婚礼不是一种形式 而是一种态度！是亲情 有请 爱情的完美融合 更是责任与义务的勇敢承担！！用语言的艺术 为新人续写爱的美丽瞬间。。。。', '晨风 感恩篇', '6', '1421666737', '0-58-59', '59', '朗艺北京主持人晨风');
INSERT INTO `rd_photos` VALUES ('62', '婚礼不是一种形式 而是一种态度！是亲情 友情 爱情的完美融合。。。 预约电话：13121095558 晨风 ', '晨风 开场篇', '6', '1421666974', '0-58-59', '59', '朗艺北京主持人晨风');
INSERT INTO `rd_photos` VALUES ('63', '晨风专栏相册', '晨风 专栏', '6', '1421667136', '0-58', '58', '朗艺北京主持人晨风');
INSERT INTO `rd_photos` VALUES ('64', '作为一名职业的婚礼人,从业5年来很荣幸 能够一直站在这个舞台上,见证每一对新人的幸福结合.感受着属于她们的爱情故事,一次次的体会幸福瞬间 美丽绽放.每一次看到不同的新人 露出幸福的微笑,或是 流下感动的泪水,那一刻感觉这个职业真的很伟大! 用语言的艺术为 新人续写爱的美丽瞬间！    .......', '晨风 你的婚礼 一样精彩。。', '6', '1421667227', '0-58-63', '63', '朗艺北京主持人晨风');
INSERT INTO `rd_photos` VALUES ('65', '朗艺主持人团队 北京主持人-晨风  档期表更新。。。感谢所有好朋友 一直以来的支持与帮助  2015 我们一起努力！ 新浪档期表 每日更新：http://blog.sina.com.cn/s/blog_ec8abef60102uy2v.html', '晨风 档期表更新。。', '6', '1421667359', '0-58-63', '63', '朗艺北京主持人晨风');
INSERT INTO `rd_photos` VALUES ('66', '明辉作品', '明辉作品', '7', '1421667516', '0-58', '58', '明辉');
INSERT INTO `rd_photos` VALUES ('67', '明辉主持婚礼', '明辉 主持风采', '7', '1421670530', '0-58-66', '66', '明辉');
INSERT INTO `rd_photos` VALUES ('68', '有感动，才是一场完美的婚礼！有一颗真诚的心，才配做一名执麦者！我，站在舞台的中央，去享受爱情炙热的温度，选择我，给你想象不到的震撼！', '明辉 北京大学校园故事', '7', '1421670624', '0-58-66', '66', '明辉');
INSERT INTO `rd_photos` VALUES ('69', '明辉的作品', '明辉  (1)', '7', '1421670826', '0-58-66', '66', '明辉');
INSERT INTO `rd_photos` VALUES ('70', '谢添作品\r\n', '谢添作品', '12', '1421869495', '0-58', '58', '主持人 谢添');
INSERT INTO `rd_photos` VALUES ('71', ' 婚礼真正的情感 在于亲情 友情 爱情的陪伴 主持人只是一个串联者 整场仪式中把新人想要的分享 传递给所有来宾\r\n\r\n\r\n', '森林里的梦', '12', '1421869667', '0-58-70', '70', '主持人 谢添');
INSERT INTO `rd_photos` VALUES ('72', ' 真正的爱都是祖辈传给父辈 父辈再传给我我们 一代一代延续 爱与传承', '家族里的集体婚礼 ', '12', '1421871954', '0-58-70', '70', '主持人 谢添');
INSERT INTO `rd_photos` VALUES ('73', '只要你愿意 万水千山都可以 ', ' 瑞士的信 ', '12', '1421872409', '0-58-70', '70', '主持人 谢添');
INSERT INTO `rd_photos` VALUES ('74', '曹寓腾作品', '曹寓腾作品', '8', '1421898683', '0-58', '58', '优尚励合团队曹寓腾');
INSERT INTO `rd_photos` VALUES ('75', ' 感觉好才是真的好！.......', '全聚德', '8', '1421898780', '0-58-74', '74', '优尚励合团队曹寓腾');
INSERT INTO `rd_photos` VALUES ('76', ' 庄重大气，唯美浪漫', '北京饭店金色大厅 ', '6', '1421898887', '0-58-74', '74', '朗艺北京主持人晨风');
INSERT INTO `rd_photos` VALUES ('77', '张坤作品', '张坤作品', '9', '1421899562', '0-58', '58', '星娱主持汇张坤');
INSERT INTO `rd_photos` VALUES ('78', '一场婚礼需要让新人彼此以告白的方式来表达对对方的爱', '英为有你，聚拢幸福 ', '9', '1421899635', '0-58-77', '77', '星娱主持汇张坤');
INSERT INTO `rd_photos` VALUES ('79', '万里作品', '万里作品', '10', '1421900105', '0-58', '58', '万里婚礼团队创始人万里');
INSERT INTO `rd_photos` VALUES ('80', '按照新人要求精心策划\r\n', '佟心飞扬主题婚礼', '10', '1421900262', '0-58-79', '79', '万里婚礼团队创始人万里');
INSERT INTO `rd_photos` VALUES ('81', '造型师所有照片', '造型师', '14', '1421933874', '0', '0', '娃娃造型化妆师梦君');
INSERT INTO `rd_photos` VALUES ('82', '化妆师梦君作品', '化妆师梦君作品', '14', '1421933997', '0-81', '81', '娃娃造型化妆师梦君');
INSERT INTO `rd_photos` VALUES ('83', '不喜欢太死板当发型，喜欢自然简单', '韩式造型', '14', '1421934137', '0-81-82', '82', '娃娃造型化妆师梦君');
INSERT INTO `rd_photos` VALUES ('84', '摄影新娘', '摄影新娘', '14', '1421934386', '0-81-82', '82', '娃娃造型化妆师梦君');
INSERT INTO `rd_photos` VALUES ('85', '新娘是公司白领，新郎从商！', '梦君专栏', '14', '1421936300', '0-81', '81', '娃娃造型化妆师梦君');
INSERT INTO `rd_photos` VALUES ('86', '新娘是公司白领，新郎从商！', '韩式造型', '14', '1421936357', '0-81-85', '85', '娃娃造型化妆师梦君');
INSERT INTO `rd_photos` VALUES ('87', '作品', 'LISEMAKEUP作品', '15', '1421937197', '0-81', '81', 'LISEMAKEUP造型师黎斯');
INSERT INTO `rd_photos` VALUES ('88', '婚礼快乐', '小婕新婚快乐', '6', '1421937289', '0-81-87', '87', '朗艺北京主持人晨风');
INSERT INTO `rd_photos` VALUES ('89', '摄像师', '摄像师', '16', '1421940381', '0', '0', 'Likefilm婚礼电影工作室');
INSERT INTO `rd_photos` VALUES ('90', '作品', 'likefilm作品', '16', '1421940425', '0-89', '89', 'Likefilm婚礼电影工作室');
INSERT INTO `rd_photos` VALUES ('91', '陆毅&amp;鲍蕾毛里求斯婚礼', '陆毅&amp;鲍蕾毛里求斯婚礼', '16', '1421940523', '0-89-90', '90', 'Likefilm婚礼电影工作室');
INSERT INTO `rd_photos` VALUES ('92', '日坛会所 婚礼跟拍 ', '日坛会所 婚礼跟拍 ', '16', '1421940673', '0-89-90', '90', 'Likefilm婚礼电影工作室');
INSERT INTO `rd_photos` VALUES ('93', '专栏', 'likefilm专栏', '16', '1421944571', '0-89', '89', 'Likefilm婚礼电影工作室');
INSERT INTO `rd_photos` VALUES ('94', '圣托里尼岛（Santorini）是爱琴海最璀璨的一颗明珠，柏拉图笔下的自由之地。这里有世界上最美的日落，最壮阔的海景，这里蓝白相知的色彩天地是艺术家的聚集地，是摄影家的天堂，在这里，你可以作诗人，也可以作画家，描绘出你心目中圣托里尼最蓝的天空。', '环球旅拍—圣托里尼 ', '16', '1421944874', '0-89-93', '93', 'Likefilm婚礼电影工作室');
INSERT INTO `rd_photos` VALUES ('95', '策划师', '策划师', '17', '1421948526', '0', '0', '菲菲 策划师');
INSERT INTO `rd_photos` VALUES ('96', '策划师作品', '策划师作品', '17', '1421948574', '0-95', '95', '菲菲 策划师');
INSERT INTO `rd_photos` VALUES ('97', '浪漫的紫色结合灯光的渲染，让全场体现出梦幻典雅的氛围，方案依据浪漫的午后花园，选用高贵的紫色，进显优雅自然。 ', '来自EN的梦中的花园', '17', '1421948676', '0-95-96', '96', '菲菲 策划师');
INSERT INTO `rd_photos` VALUES ('98', '眼中的风景，记忆的碎片，是每一个相伴日子的拼凑，是依靠彼此最温暖的余温，在我们的婚礼中，放肆的笑，骄傲的展示在众人面前，今天的你我如何幸福', 'You are my best view', '17', '1421949118', '0-95-96', '96', '菲菲 策划师');
INSERT INTO `rd_photos` VALUES ('99', '眼中的风景，记忆的碎片，是每一个相伴日子的拼凑，是依靠彼此最温暖的余温，在我们的婚礼中，放肆的笑，骄傲的展示在众人面前，今天的你我如何幸福', '菲菲专栏', '17', '1421949314', '0-95', '95', '菲菲 策划师');
INSERT INTO `rd_photos` VALUES ('100', '眼中的风景，记忆的碎片，是每一个相伴日子的拼凑，是依靠彼此最温暖的余温，在我们的婚礼中，放肆的笑，骄傲的展示在众人面前，今天的你我如何幸福', 'best view', '17', '1421949355', '0-95-99', '99', '菲菲 策划师');
INSERT INTO `rd_photos` VALUES ('101', '布置师', '布置师', '18', '1421981647', '0', '0', '布置师 娜美');
INSERT INTO `rd_photos` VALUES ('102', '娜美作品', '娜美的作品', '18', '1421981722', '0-101', '101', '布置师 娜美');
INSERT INTO `rd_photos` VALUES ('103', '找到对的人，完成独一无二的梦想，拒绝随波逐流。我不怕你完美主义，也不拍你细节控，只怕没有勇气告诉我你的天马行空。坚持这个世界独特的自己，我在这里等你。', '孔雀主题婚礼', '18', '1421981828', '0-101-102', '102', '布置师 娜美');
INSERT INTO `rd_photos` VALUES ('104', '娜美专栏', '娜美专栏', '18', '1421981901', '0-101', '101', '布置师 娜美');
INSERT INTO `rd_photos` VALUES ('105', '找到对的人，完成独一无二的梦想，拒绝随波逐流。我不怕你完美主义，也不拍你细节控，只怕没有勇气告诉我你的天马行空。坚持这个世界独特的自己，我在这里等你。', 'MY LOVE', '18', '1421981952', '0-101-104', '104', '布置师 娜美');
INSERT INTO `rd_photos` VALUES ('106', ' LM妆发馆造型师晨晨', '晨晨作品', '19', '1422234650', '0-81', '81', 'LM妆发馆造型师晨晨');
INSERT INTO `rd_photos` VALUES ('107', '韩式新娘发型 ', '韩式新娘发型 ', '19', '1422234707', '0-81-106', '106', 'LM妆发馆造型师晨晨');
INSERT INTO `rd_photos` VALUES ('108', '时尚造型师奕煊 ', '造型师奕煊 作品', '20', '1422236442', '0-81', '81', '时尚造型师奕煊');
INSERT INTO `rd_photos` VALUES ('109', '\r\n藤薰高级定制婚纱\r\n', ' 藤薰高级定制婚纱(8)', '20', '1422236491', '0-81-108', '108', '时尚造型师奕煊');
INSERT INTO `rd_photos` VALUES ('110', '作品', '95视觉影像 作品', '21', '1422238010', '0-89', '89', '95视觉影像工作室');
INSERT INTO `rd_photos` VALUES ('111', '\r\n威斯汀酒店 婚礼花絮 95视觉(3', ' 威斯汀酒店 婚礼花絮 95视觉', '21', '1422238052', '0-89-110', '110', '95视觉影像工作室');
INSERT INTO `rd_photos` VALUES ('112', 'EN新电影', 'EN新电影作品', '23', '1422238742', '0-89', '89', 'EN新电影一私人婚礼影像');
INSERT INTO `rd_photos` VALUES ('113', '\r\nEN新电影2014.8.3中澳', ' EN新电影中澳', '23', '1422238813', '0-89-112', '112', 'EN新电影一私人婚礼影像');
INSERT INTO `rd_photos` VALUES ('114', '专栏', '主持人谢添专栏', '12', '1422260844', '0-58', '58', '主持人 谢添');
INSERT INTO `rd_photos` VALUES ('115', '一群逗逼的伴郎伴娘是新人最好的礼物\r\n', '黄山下的诺言', '12', '1422260953', '0-58-114', '114', '主持人 谢添');
INSERT INTO `rd_photos` VALUES ('116', '苗苗的作品', '策划师 苗苗作品', '24', '1422280518', '0-95', '95', '策划师 苗苗');
INSERT INTO `rd_photos` VALUES ('117', '艳丽的白蓝红国旗色 信封的通道与美式信箱的鲜花路引 热气球和美国城市命名的桌卡 ', '欢脱的美国复古风潮婚礼', '24', '1422280636', '0-95-116', '116', '策划师 苗苗');
INSERT INTO `rd_photos` VALUES ('118', '作品', '布置师 任晓作品', '25', '1422282051', '0-101', '101', '布置师 任晓');
INSERT INTO `rd_photos` VALUES ('119', '辉常惊喜 伟伟道来', '辉常惊喜 伟伟道来', '6', '1422282125', '0-101-118', '118', '朗艺北京主持人晨风');
INSERT INTO `rd_photos` VALUES ('120', '我工作室化妆总监2003年从业20006年成立工作室至今为多位艺人，主持人，模特做过形象设计·帮助数千新娘制定婚礼整体造型理念时尚！脱俗！喜欢时尚个性的您快快与我们取得联系吧！ ', '布置师 韩雪作品', '28', '1422283319', '0-101', '101', '布置师韩雪');
INSERT INTO `rd_photos` VALUES ('121', '时尚，大气，个性新娘 ', '时尚，大气，个性新娘', '28', '1422283352', '0-101-120', '120', '布置师韩雪');

-- ----------------------------
-- Table structure for `rd_picture`
-- ----------------------------
DROP TABLE IF EXISTS `rd_picture`;
CREATE TABLE `rd_picture` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pic` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_picture
-- ----------------------------
INSERT INTO `rd_picture` VALUES ('31', '54c06edfbb6b1.jpg', '60', '爱的第五季', '婚礼不是一种形式 而是一种态度！是亲情 有请 爱情的完美融合 更是责任与义务的勇敢承担！！用语言的艺术 为新人续写爱的美丽瞬间。。。。---晨风', '6');
INSERT INTO `rd_picture` VALUES ('41', '54c0765b88878.jpg', '76', '北京饭店金色大厅', '唯美浪漫轻松自然', '8');
INSERT INTO `rd_picture` VALUES ('42', '54c076866b13a.jpg', '76', '北京饭店金色大厅', '唯美浪漫轻松自然', '8');
INSERT INTO `rd_picture` VALUES ('7', '54bd066ae76d3.jpeg', '62', '开场篇', '', '6');
INSERT INTO `rd_picture` VALUES ('39', '54c0755e56501.jpg', '75', '全聚德', '唯美浪漫轻松自然', '8');
INSERT INTO `rd_picture` VALUES ('40', '54c0759b1c895.jpg', '76', '北京饭店金色大厅', '唯美浪漫轻松自然', '8');
INSERT INTO `rd_picture` VALUES ('30', '54c06ebeaa831.jpg', '60', '爱的第五季', '婚礼不是一种形式 而是一种态度！是亲情 有请 爱情的完美融合 更是责任与义务的勇敢承担！！用语言的艺术 为新人续写爱的美丽瞬间。。。。---晨风', '6');
INSERT INTO `rd_picture` VALUES ('32', '54c06f363dad8.jpg', '61', '感恩篇', '婚礼不是一种形式 而是一种态度！是亲情 有请 爱情的完美融合 更是责任与义务的勇敢承担！！用语言的艺术 为新人续写爱的美丽瞬间。。。。---晨风', '6');
INSERT INTO `rd_picture` VALUES ('33', '54c0704ddc123.jpg', '62', '开场篇', '婚礼不是一种形式 而是一种态度！是亲情 有请 爱情的完美融合 更是责任与义务的勇敢承担！！用语言的艺术 为新人续写爱的美丽瞬间。。。。---晨风', '6');
INSERT INTO `rd_picture` VALUES ('35', '54c071420bd18.jpg', '67', '主持风采', '有感动，才是一场完美的婚礼！有一颗真诚的心，才配做一名执麦者！我，站在舞台的中央，去享受爱情炙热的温度，选择我，给你想象不到的震撼！', '7');
INSERT INTO `rd_picture` VALUES ('34', '54c0711b39e28.jpg', '67', '主持风采', '有感动，才是一场完美的婚礼！有一颗真诚的心，才配做一名执麦者！我，站在舞台的中央，去享受爱情炙热的温度，选择我，给你想象不到的震撼！', '7');
INSERT INTO `rd_picture` VALUES ('38', '54c0751cacde5.jpg', '75', '全聚德', ' 庄重大气，唯美浪漫  感觉真好\r\n\r\n', '8');
INSERT INTO `rd_picture` VALUES ('36', '54c071bf80d05.jpg', '68', '北京大学校园故事', '有感动，才是一场完美的婚礼！有一颗真诚的心，才配做一名执麦者！我，站在舞台的中央，去享受爱情炙热的温度，选择我，给你想象不到的震撼！', '7');
INSERT INTO `rd_picture` VALUES ('37', '54c071f034e7c.jpg', '69', '明辉', '有感动，才是一场完美的婚礼！有一颗真诚的心，才配做一名执麦者！我，站在舞台的中央，去享受爱情炙热的温度，选择我，给你想象不到的震撼！', '7');
INSERT INTO `rd_picture` VALUES ('19', '54c006848739d.jpg', '71', '森林里的梦', ' 婚礼真正的情感 在于亲情 友情 爱情的陪伴 主持人只是一个串联者 整场仪式中把新人想要的分享 传递给所有来宾\r\n\r\n', '12');
INSERT INTO `rd_picture` VALUES ('20', '54c008514564d.jpg', '71', '森林里的梦', ' 婚礼真正的情感 在于亲情 友情 爱情的陪伴 主持人只是一个串联者 整场仪式中把新人想要的分享 传递给所有来宾\r\n', '12');
INSERT INTO `rd_picture` VALUES ('18', '54bfe32c22c09.jpg', '64', '你的婚礼一样精彩', '生活中的他，阳光 开朗 积极向上，热爱学习和读书，力争用知识武装自己，用文化增强底蕴，喜欢被别人称为有内涵的主持人~o(*￣▽￣*)ゞ O(∩_∩)O   ', '6');
INSERT INTO `rd_picture` VALUES ('21', '54c00980e332d.jpg', '71', '森林里的梦', ' 婚礼真正的情感 在于亲情 友情 爱情的陪伴 主持人只是一个串联者 整场仪式中把新人想要的分享 传递给所有来宾\r\n', '12');
INSERT INTO `rd_picture` VALUES ('22', '54c00c32d46b3.jpg', '72', '家族里的集体婚礼', ' 真正的爱都是祖辈传给父辈 父辈再传给我我们 一代一代延续 爱与传承\r\n\r\n\r\n', '12');
INSERT INTO `rd_picture` VALUES ('23', '54c00c58e06cb.jpg', '72', '家族里的集体婚礼', ' 真正的爱都是祖辈传给父辈 父辈再传给我我们 一代一代延续 爱与传承', '12');
INSERT INTO `rd_picture` VALUES ('24', '54c00c7a4deb2.jpg', '72', '家族里的集体婚礼', ' 真正的爱都是祖辈传给父辈 父辈再传给我我们 一代一代延续 爱与传承', '12');
INSERT INTO `rd_picture` VALUES ('25', '54c00c9aebd85.jpg', '72', '家族里的集体婚礼', ' 真正的爱都是祖辈传给父辈 父辈再传给我我们 一代一代延续 爱与传承', '12');
INSERT INTO `rd_picture` VALUES ('26', '54c00cc658bef.jpg', '72', '家族里的集体婚礼', ' 真正的爱都是祖辈传给父辈 父辈再传给我我们 一代一代延续 爱与传承', '12');
INSERT INTO `rd_picture` VALUES ('27', '54c00dc18d538.jpg', '73', '瑞士的信', '只要你愿意 万水千山都可以', '12');
INSERT INTO `rd_picture` VALUES ('28', '54c00de79c819.jpg', '73', '瑞士的信', '只要你愿意 万水千山都可以', '12');
INSERT INTO `rd_picture` VALUES ('29', '54c00e1da39bb.jpg', '73', '瑞士的信', '只要你愿意 万水千山都可以', '12');
INSERT INTO `rd_picture` VALUES ('43', '54c07823ede71.jpg', '78', '因为有你', '一场婚礼需要让新人彼此以告白的方式来表达对对方的爱', '9');
INSERT INTO `rd_picture` VALUES ('44', '54c0784a9f5aa.jpg', '78', '因为有你', '一场婚礼需要让新人彼此以告白的方式来表达对对方的爱', '9');
INSERT INTO `rd_picture` VALUES ('45', '54c0787874f00.jpg', '78', '因为有你', '一场婚礼需要让新人彼此以告白的方式来表达对对方的爱', '8');
INSERT INTO `rd_picture` VALUES ('46', '54c07ac69d149.jpg', '80', '佟心飞扬主题婚礼 ', ' 按照新人要求精心策划', '10');
INSERT INTO `rd_picture` VALUES ('47', '54c07b8123c3f.jpg', '80', '佟心飞扬主题婚礼', '按照新人要求精心策划 ', '10');
INSERT INTO `rd_picture` VALUES ('48', '54c07bd24ee08.jpg', '80', '佟心飞扬主题婚礼', '按照新人要求精心策划', '10');
INSERT INTO `rd_picture` VALUES ('49', '54c07c3095781.png', '78', '因为有你', '按照新人要求精心策划', '9');
INSERT INTO `rd_picture` VALUES ('50', '54c0fe8680cb2.jpg', '83', '韩式造型', '不喜欢太死板当发型，喜欢自然简单', '14');
INSERT INTO `rd_picture` VALUES ('51', '54c0fec644e48.jpg', '83', '韩式造型', '新娘脸型较好，稍微有点婴儿肥，所以前区发型做郎打毛处理，拉长了脸型！眉毛选着了略平眉峰明显的标准眉来加强脸部的棱角感！ ', '14');
INSERT INTO `rd_picture` VALUES ('52', '54c1008271ab6.jpg', '84', '摄影新娘', '摄影新娘', '14');
INSERT INTO `rd_picture` VALUES ('53', '54c107a192b24.jpg', '86', '韩式', '新娘是公司白领，新郎从商！', '14');
INSERT INTO `rd_picture` VALUES ('54', '54c107ba8cb28.jpg', '86', '韩式', '新娘是公司白领，新郎从商！', '14');
INSERT INTO `rd_picture` VALUES ('55', '54c10add603e7.jpg', '88', '小捷新婚快乐', '美丽的新娘小婕新婚快乐', '15');
INSERT INTO `rd_picture` VALUES ('58', '54c10ca46a429.jpg', '88', '小婕新婚快乐', '\r\n美丽的新娘小婕新婚快乐～(3', '15');
INSERT INTO `rd_picture` VALUES ('57', '54c10c6b8f4ee.jpg', '88', '小婕新婚快乐', '结婚快乐', '15');
INSERT INTO `rd_picture` VALUES ('63', '54c11e987bcf2.jpg', '91', '小婕新婚快乐', '日坛会所 婚礼跟拍 ', '16');
INSERT INTO `rd_picture` VALUES ('60', '54c11884c0a94.jpg', '92', '日坛会所 婚礼跟拍 ', '日坛会所 婚礼跟拍 ', '16');
INSERT INTO `rd_picture` VALUES ('61', '54c118a5deaa2.jpg', '92', '日坛会所 婚礼跟拍', '日坛会所 婚礼跟拍 ', '16');
INSERT INTO `rd_picture` VALUES ('62', '54c118cd46a07.jpg', '92', '日坛会所 婚礼跟拍', '日坛会所 婚礼跟拍 ', '16');
INSERT INTO `rd_picture` VALUES ('64', '54c1285fdb8ec.jpg', '94', '环球航拍', '圣托里尼岛（Santorini）是爱琴海最璀璨的一颗明珠，柏拉图笔下的自由之地。这里有世界上最美的日落，最壮阔的海景，这里蓝白相知的色彩天地是艺术家的聚集地，是摄影家的天堂，在这里，你可以作诗人，也可以作画家，描绘出你心目中圣托里尼最蓝的天空。', '16');
INSERT INTO `rd_picture` VALUES ('65', '54c1288210aa6.jpg', '94', '环球航拍', '圣托里尼岛（Santorini）是爱琴海最璀璨的一颗明珠，柏拉图笔下的自由之地。这里有世界上最美的日落，最壮阔的海景，这里蓝白相知的色彩天地是艺术家的聚集地，是摄影家的天堂，在这里，你可以作诗人，也可以作画家，描绘出你心目中圣托里尼最蓝的天空。', '16');
INSERT INTO `rd_picture` VALUES ('66', '54c128b95f902.jpg', '94', '环球航拍', '圣托里尼岛（Santorini）是爱琴海最璀璨的一颗明珠，柏拉图笔下的自由之地。这里有世界上最美的日落，最壮阔的海景，这里蓝白相知的色彩天地是艺术家的聚集地，是摄影家的天堂，在这里，你可以作诗人，也可以作画家，描绘出你心目中圣托里尼最蓝的天空。', '16');
INSERT INTO `rd_picture` VALUES ('67', '54c1374483eda.jpg', '97', 'en梦中花园', '浪漫的紫色结合灯光的渲染，让全场体现出梦幻典雅的氛围，方案依据浪漫的午后花园，选用高贵的紫色，进显优雅自然。 ', '17');
INSERT INTO `rd_picture` VALUES ('68', '54c137b77a0f2.jpg', '97', 'en梦中花园', '浪漫的紫色结合灯光的渲染，让全场体现出梦幻典雅的氛围，方案依据浪漫的午后花园，选用高贵的紫色，进显优雅自然。 ', '17');
INSERT INTO `rd_picture` VALUES ('69', '54c137dc7b4ee.jpg', '97', 'en梦中花园', '浪漫的紫色结合灯光的渲染，让全场体现出梦幻典雅的氛围，方案依据浪漫的午后花园，选用高贵的紫色，进显优雅自然。 ', '17');
INSERT INTO `rd_picture` VALUES ('70', '54c1390d1d6ad.jpg', '98', 'you are my best view', '眼中的风景，记忆的碎片，是每一个相伴日子的拼凑，是依靠彼此最温暖的余温，在我们的婚礼中，放肆的笑，骄傲的展示在众人面前，今天的你我如何幸福', '17');
INSERT INTO `rd_picture` VALUES ('71', '54c139ee59728.jpg', '100', 'beset view', '眼中的风景，记忆的碎片，是每一个相伴日子的拼凑，是依靠彼此最温暖的余温，在我们的婚礼中，放肆的笑，骄傲的展示在众人面前，今天的你我如何幸福', '17');
INSERT INTO `rd_picture` VALUES ('72', '54c13a3ae2423.jpg', '100', 'beset view', '眼中的风景，记忆的碎片，是每一个相伴日子的拼凑，是依靠彼此最温暖的余温，在我们的婚礼中，放肆的笑，骄傲的展示在众人面前，今天的你我如何幸福', '17');
INSERT INTO `rd_picture` VALUES ('73', '54c1b9524d826.jpg', '103', '孔雀主题婚礼', '找到对的人，完成独一无二的梦想，拒绝随波逐流。我不怕你完美主义，也不拍你细节控，只怕没有勇气告诉我你的天马行空。坚持这个世界独特的自己，我在这里等你。\r\n', '18');
INSERT INTO `rd_picture` VALUES ('74', '54c1b98e3bc1f.jpg', '103', '孔雀主题婚礼', '找到对的人，完成独一无二的梦想，拒绝随波逐流。我不怕你完美主义，也不拍你细节控，只怕没有勇气告诉我你的天马行空。坚持这个世界独特的自己，我在这里等你。\r\n\r\n', '18');
INSERT INTO `rd_picture` VALUES ('75', '54c1b9d188f26.jpg', '103', '孔雀主题婚礼', '找到对的人，完成独一无二的梦想，拒绝随波逐流。我不怕你完美主义，也不拍你细节控，只怕没有勇气告诉我你的天马行空。坚持这个世界独特的自己，我在这里等你。\r\n\r\n', '18');
INSERT INTO `rd_picture` VALUES ('76', '54c1ba0ebdca6.jpg', '105', 'MY LOVE', '找到对的人，完成独一无二的梦想，拒绝随波逐流。我不怕你完美主义，也不拍你细节控，只怕没有勇气告诉我你的天马行空。坚持这个世界独特的自己，我在这里等你。\r\n\r\n', '18');
INSERT INTO `rd_picture` VALUES ('77', '54c1ba57af7cf.jpg', '105', 'MY LOVE', '找到对的人，完成独一无二的梦想，拒绝随波逐流。我不怕你完美主义，也不拍你细节控，只怕没有勇气告诉我你的天马行空。坚持这个世界独特的自己，我在这里等你。\r\n\r\n', '18');
INSERT INTO `rd_picture` VALUES ('78', '54c1ba8683606.jpg', '105', 'MY LOVE', '找到对的人，完成独一无二的梦想，拒绝随波逐流。我不怕你完美主义，也不拍你细节控，只怕没有勇气告诉我你的天马行空。坚持这个世界独特的自己，我在这里等你。\r\n\r\n', '18');
INSERT INTO `rd_picture` VALUES ('79', '54c594871a99b.jpg', '107', '韩式新郎发型', '韩式新娘发型 ', '6');
INSERT INTO `rd_picture` VALUES ('80', '54c59b7684802.jpg', '109', ' 藤薰高级定制婚纱', '\r\n藤薰高级定制婚纱(8)\r\n', '20');
INSERT INTO `rd_picture` VALUES ('81', '54c59bc0acf1e.jpg', '109', ' 藤薰高级定制婚纱(8)', '\r\n藤薰高级定制婚纱(8)\r\n', '20');
INSERT INTO `rd_picture` VALUES ('82', '54c59bdb3b93d.jpg', '109', '藤薰高级定制婚纱(8)', '\r\n藤薰高级定制婚纱(8)\r\n', '20');
INSERT INTO `rd_picture` VALUES ('83', '54c59c2459649.jpg', '107', '韩式新郎发型', '\r\n藤薰高级定制婚纱(8)\r\n', '20');
INSERT INTO `rd_picture` VALUES ('84', '54c5a1dbcc7cf.jpg', '111', '酒店婚礼花絮', '\r\n威斯汀酒店 婚礼花絮 95视觉(3', '6');
INSERT INTO `rd_picture` VALUES ('85', '54c5a1f51f283.jpg', '111', '95视觉影像工作室', '\r\n威斯汀酒店 婚礼花絮 95视觉(3', '22');
INSERT INTO `rd_picture` VALUES ('86', '54c5a207db26d.jpg', '111', ' 威斯汀酒店 婚礼花絮 95视觉(3', '\r\n威斯汀酒店 婚礼花絮 95视觉(3', '22');
INSERT INTO `rd_picture` VALUES ('87', '54c5a262dc28f.jpg', '111', '95视觉影像工作室', '\r\n威斯汀酒店 婚礼花絮 95视觉(3', '22');
INSERT INTO `rd_picture` VALUES ('88', '54c5a47c88b15.png', '113', 'EN新电影婚礼影像', '\r\nEN新电影2014.8.3中澳(4', '23');
INSERT INTO `rd_picture` VALUES ('89', '54c5a493dc06c.png', '113', 'EN新电影一私人婚礼影像', '\r\nEN新电影2014.8.3中澳(4', '23');
INSERT INTO `rd_picture` VALUES ('90', '54c5a4ae458fb.png', '113', ' EN新电影', '\r\nEN新电影2014.8.3中澳(4', '23');
INSERT INTO `rd_picture` VALUES ('91', '54c5fddd74c41.jpg', '115', '黄山下的诺言', '一群逗逼的伴郎伴娘是新人最好的礼物', '12');
INSERT INTO `rd_picture` VALUES ('92', '54c5feb81185f.jpg', '115', '黄山下的诺言', '一群逗逼的伴郎伴娘是新人最好的礼物', '12');
INSERT INTO `rd_picture` VALUES ('93', '54c5ff7684bb6.jpg', '115', '黄山下的诺言', '一群逗逼的伴郎伴娘是新人最好的礼物', '12');
INSERT INTO `rd_picture` VALUES ('94', '54c648065f01b.jpg', '117', '美国复古风潮婚礼', '艳丽的白蓝红国旗色 信封的通道与美式信箱的鲜花路引 热气球和美国城市命名的桌卡 ', '24');
INSERT INTO `rd_picture` VALUES ('95', '54c6482b0629b.jpg', '117', '美国复古风潮婚礼', '艳丽的白蓝红国旗色 信封的通道与美式信箱的鲜花路引 热气球和美国城市命名的桌卡', '24');
INSERT INTO `rd_picture` VALUES ('96', '54c6484c06612.jpg', '117', '美国复古风潮婚礼', '艳丽的白蓝红国旗色 信封的通道与美式信箱的鲜花路引 热气球和美国城市命名的桌卡', '24');
INSERT INTO `rd_picture` VALUES ('97', '54c64dba7f9a6.jpg', '119', '辉常惊喜 伟伟道来', '辉常惊喜 伟伟道来', '25');
INSERT INTO `rd_picture` VALUES ('98', '54c64de02454e.jpg', '119', '辉常惊喜 伟伟道来', '辉常惊喜 伟伟道来', '25');
INSERT INTO `rd_picture` VALUES ('99', '54c64e0048e9d.jpg', '119', '辉常惊喜 伟伟道来', '辉常惊喜 伟伟道来', '25');
INSERT INTO `rd_picture` VALUES ('100', '54c652760a7cd.jpg', '121', '时尚，大气，个性新娘 ', '时尚，大气，个性新娘 ', '28');
INSERT INTO `rd_picture` VALUES ('101', '54c6528feda80.jpg', '121', '时尚，大气，个性新娘', '时尚，大气，个性新娘 ', '28');
INSERT INTO `rd_picture` VALUES ('102', '54c652a37f93e.jpg', '121', '时尚，大气，个性新娘', '时尚，大气，个性新娘 ', '28');

-- ----------------------------
-- Table structure for `rd_price`
-- ----------------------------
DROP TABLE IF EXISTS `rd_price`;
CREATE TABLE `rd_price` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(32) NOT NULL,
  `detail` text NOT NULL,
  `price` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_price
-- ----------------------------
INSERT INTO `rd_price` VALUES ('1', '主持人', 'DJ一名，督导师一名，提前彩排，沟通一次', '5000', '10');
INSERT INTO `rd_price` VALUES ('2', '婚宴主持', '前期与新人 见面洽谈，婚礼前一天 彩排一次 以及整场婚礼 执行策划 全程跟随', '2400', '6');
INSERT INTO `rd_price` VALUES ('3', '主持人', '前期沟通一次参与策划，婚礼前一日彩排', '4500', '7');
INSERT INTO `rd_price` VALUES ('4', '主持人', '前期沟通一次参与策划，婚礼前一日彩排...', '5000', '9');
INSERT INTO `rd_price` VALUES ('5', '主持人', '带DJ 督导 礼仪 各一名', '5000', '8');
INSERT INTO `rd_price` VALUES ('6', '新娘跟妆', '当天新娘全程跟妆易结活动价', '1200', '14');
INSERT INTO `rd_price` VALUES ('7', '化妆总监全程跟妆', '化妆总监黎斯婚礼当天提供上门化妆，提供二对一的整体造型设计,所有化妆品均为国际一线品牌化妆品，包含婚礼当天3款造型，1位妈妈妆，1位伴娘妆（旗下造型师打造）。陪同新娘在婚礼过程中补妆改妆，免费使用新娘当天所有头饰配饰。（易结网特权：试妆成功与否，均不收取任何试妆费用，赠送日本手工定制仿真假睫毛，一次性粉扑，以及进口面膜一份）', '3000', '15');
INSERT INTO `rd_price` VALUES ('8', '婚礼跟拍', '四机位拍摄', '19800', '16');
INSERT INTO `rd_price` VALUES ('9', '婚礼策划', '助客户明确婚礼的需求，方向和基调 确定婚礼服务团队，包括新人方团队和专业人员团队婚礼筹备过程中的统筹，包括安排婚礼当日的仪式流程和时间进程统筹，以双方的《婚礼流程确认单》为准', '10000', '17');
INSERT INTO `rd_price` VALUES ('10', '主持人', '包含：DJ、见面、彩排、婚礼当天的主持', '5000', '12');
INSERT INTO `rd_price` VALUES ('11', '婚礼布置', '根据方案设计的美美的', '5000', '18');
INSERT INTO `rd_price` VALUES ('12', '造型设计', '妈妈妆 结婚妆 ', '3000', '19');
INSERT INTO `rd_price` VALUES ('13', '婚礼摄像', '婚礼所有的摄像和摄影都会提供', '4000', '21');
INSERT INTO `rd_price` VALUES ('14', '婚礼摄像', '婚礼摄像', '6000', '23');
INSERT INTO `rd_price` VALUES ('15', '婚礼策划', '助客户明确婚礼的需求，方向和基调 确定婚礼服务团队，包括新人方团队和专业人员团队婚礼筹备过程中的统筹，包括安排婚礼当日的仪式流程和时间进程统筹', '6000', '24');
INSERT INTO `rd_price` VALUES ('16', '婚礼布置', '助客户明确婚礼的需求，方向和基调 确定婚礼服务团队，包括新人方团队和专业人员团队婚礼筹备过程中的统筹，包括安排婚礼当日的仪式流程和时间进程统筹', '4000', '25');
INSERT INTO `rd_price` VALUES ('17', '婚礼布置', '把您的婚礼布置的美美的', '4000', '28');

-- ----------------------------
-- Table structure for `rd_pro_image`
-- ----------------------------
DROP TABLE IF EXISTS `rd_pro_image`;
CREATE TABLE `rd_pro_image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `pic_name` varchar(64) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rd_pro_image
-- ----------------------------
INSERT INTO `rd_pro_image` VALUES ('1', '1', 'Uploads/Production/54c58ef397cf9.jpg', '1422233331');
INSERT INTO `rd_pro_image` VALUES ('2', '1', 'Uploads/Production/54c58ef399851.jpg', '1422233331');
INSERT INTO `rd_pro_image` VALUES ('3', '2', 'Uploads/Production/54c58f7ed497d.jpg', '1422233470');
INSERT INTO `rd_pro_image` VALUES ('4', '2', 'Uploads/Production/54c58f7ed6ca6.jpg', '1422233470');
INSERT INTO `rd_pro_image` VALUES ('5', '2', 'Uploads/Production/54c58f7ed8fce.jpg', '1422233470');
INSERT INTO `rd_pro_image` VALUES ('6', '3', 'Uploads/Production/54c58fed00c08.jpg', '1422233581');
INSERT INTO `rd_pro_image` VALUES ('7', '3', 'Uploads/Production/54c58fed02f31.jpg', '1422233581');
INSERT INTO `rd_pro_image` VALUES ('8', '4', 'Uploads/Production/54c59095e5eaf.jpg', '1422233749');
INSERT INTO `rd_pro_image` VALUES ('9', '4', 'Uploads/Production/54c59095e85c0.jpg', '1422233749');
INSERT INTO `rd_pro_image` VALUES ('14', '5', 'Uploads/Production/54c601a4808f9.jpg', '1422262692');
INSERT INTO `rd_pro_image` VALUES ('15', '5', 'Uploads/Production/54c601a483009.jpg', '1422262693');
INSERT INTO `rd_pro_image` VALUES ('16', '5', 'Uploads/Production/54c601a48571a.jpg', '1422262693');

-- ----------------------------
-- Table structure for `rd_production`
-- ----------------------------
DROP TABLE IF EXISTS `rd_production`;
CREATE TABLE `rd_production` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `hole_name` varchar(100) NOT NULL,
  `addtime` int(11) DEFAULT NULL,
  `price` decimal(11,2) DEFAULT NULL,
  `presoninfo` varchar(200) DEFAULT NULL,
  `requires` varchar(100) DEFAULT NULL,
  `detail` text NOT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_production
-- ----------------------------
INSERT INTO `rd_production` VALUES ('1', '因为从事这份幸福的行业，见证了很多幸福时刻', '北京中央酒店', '1422233331', '200.00', '因为从事这份幸福的行业，见证了很多幸福时刻因为从事这份幸福的行业，见证了很多幸福时刻因为从事这份幸福的行业，见证了很多幸福时刻', '因为从事这份幸福的行业，见证了很多幸福时刻因为从事这份幸福的行业，见证了很多幸福时刻', '<p>因为从事这份幸福的行业，见证了很多幸福时刻因为从事这份幸福的行业，见证了很多幸福时刻因为从事这份幸福的行业，见证了很多幸福时刻因为从事这份幸福的行业，见证了很多幸福时刻因为从事这份幸福的行业，见证了很多幸福时刻</p><p><img src=\"/rd/Public/Uploads/Wedding/54c58edee5289.jpg\" height=\"500\" width=\"500\" alt=\"\" /><br /></p>', '0');
INSERT INTO `rd_production` VALUES ('2', '07年至今，一直服务于婚礼行', '北京中央酒店', '1422233470', '3000.00', '07年至今，一直服务于婚礼行业。 曾服务于多家业内知名机构，12年创立More &amp; More多么工作室。 婚礼，派对，活动，展览，', '07年至今，一直服务于婚礼行业。 曾服务于多家业内知名机构，12年创立More &amp; More多么工作室。 婚礼，派对，活动，展览，07年至今，一直服务于婚礼行业。 曾服务于多家业内知名机构，1', '<p>07年至今，一直服务于婚礼行业。 曾服务于多家业内知名机构，12年创立More &amp; More多么工作室。 婚礼，派对，活动，展览，07年至今，一直服务于婚礼行业。 曾服务于多家业内知名机构，12年创立More &amp; More多么工作室。 婚礼，派对，活动，展览，07年至今，一直服务于婚礼行业。 曾服务于多家业内知名机构，12年创立More &amp; More多么工作室。 婚礼，派对，活动，展览，</p><p><img src=\"/rd/Public/Uploads/Wedding/54c58f70b8136.jpg\" height=\"500\" width=\"500\" alt=\"\" /></p><p>07年至今，一直服务于婚礼行业。 曾服务于多家业内知名机构，12年创立More &amp; More多么工作室。 婚礼，派对，活动，展览，</p><p>07年至今，一直服务于婚礼行业。 曾服务于多家业内知名机构，12年创立More &amp; More多么工作室。 婚礼，派对，活动，展览，<br /></p>', '0');
INSERT INTO `rd_production` VALUES ('3', '北京第二外国语学院', '北京王副井酒店', '1422233581', '3000.00', '毕业于北京第二外国语学院，因为对婚礼的喜爱于2010年加入到这个行业，毕业于北京第二外国语学院，因为对婚礼的喜爱于2010年加入到这个行业，', '毕业于北京第二外国语学院，因为对婚礼的喜爱于2010年加入到这个行业，毕业于北京第二外国语学院，因为对婚礼的喜爱于2010年加入到这个行业，', '<p>毕业于北京第二外国语学院，因为对婚礼的喜爱于2010年加入到这个行业，毕业于北京第二外国语学院，因为对婚礼的喜爱于2010年加入到这个行业，毕业于北京第二外国语学院，因为对婚礼的喜爱于2010年加入到这个行业，毕业于北京第二外国语学院，因为对婚礼的喜爱于2010年加入到这个行业，</p><p><img src=\"/rd/Public/Uploads/Wedding/54c58fd6df199.jpg\" height=\"500\" width=\"600\" alt=\"\" /></p><p>毕业于北京第二外国语学院，因为对婚礼的喜爱于2010年加入到这个行业，毕业于北京第二外国语学院，因为对婚礼的喜爱于2010年加入到这个行业，毕业于北京第二外国语学院，因为对婚礼的喜爱于2010年加入到这个行业，<br /></p>', '0');
INSERT INTO `rd_production` VALUES ('4', '想要你的婚礼终生难', '三亚酒店', '1422233749', '400.00', '北京人就喜欢北京人就喜欢北京人就喜欢北京人就喜欢北京人就喜欢北京人就喜欢', '中赫时尚橱窗设计专业优秀学员，曾多次策划并执行多场高端私人定制婚礼、异地婚礼中赫时尚橱窗设计专业优秀学员，曾多次策划并执行多场高端私人定制婚礼、异地婚礼<br />', '<p>中赫时尚橱窗设计专业优秀学员，曾多次策划并执行多场高端私人定制婚礼、异地婚礼中赫时尚橱窗设计专业优秀学员，曾多次策划并执行多场高端私人定制婚礼、异地婚礼中赫时尚橱窗设计专业优秀学员，曾多次策划并执行多场高端私人定制婚礼、异地婚礼</p><p><img src=\"/rd/Public/Uploads/Wedding/54c59064ab5e7.jpg\" height=\"500\" width=\"600\" alt=\"\" /></p><p>中赫时尚橱窗设计专业优秀学员，曾多次策划并执行多场高端私人定制婚礼、异地婚礼中赫时尚橱窗设计专业优秀学员，曾多次策划并执行多场高端私人定制婚礼、异地婚礼<br /></p>', '0');
INSERT INTO `rd_production` VALUES ('5', '一直服务于婚礼行', '北京酒店', '1422262692', '4000.00', '在如今百花齐放的婚礼市场，&quot;奢华奢侈&quot;已经泛滥，', '在如今百花齐放的婚礼市场，&quot;奢华奢侈&quot;已经泛滥，在如今百花齐放的婚礼市场，&quot;奢华奢侈&quot;已经泛滥，', '<p>在如今百花齐放的婚礼市场，&quot;奢华奢侈&quot;已经泛滥，，在如今百花齐放的婚礼市场，&quot;奢华奢侈&quot;已经泛滥，，在如今百花齐放的婚礼市场，&quot;奢华奢侈&quot;已经泛滥，，在如今百花齐放的婚礼市场，&quot;奢华奢侈&quot;已经泛滥。</p><p><img src=\"/rd/Public/Uploads/Wedding/54c59146daf60.jpg\" alt=\"\" height=\"654\" width=\"785\" /></p><p>，在如今百花齐放的婚礼市场，&quot;奢华奢侈&quot;已经泛滥，，在如今百花齐放的婚礼市场，&quot;奢华奢侈&quot;已经泛滥。<br /></p>', '0');

-- ----------------------------
-- Table structure for `rd_role`
-- ----------------------------
DROP TABLE IF EXISTS `rd_role`;
CREATE TABLE `rd_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_myname` varchar(32) NOT NULL,
  `role_des` text,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_role
-- ----------------------------
INSERT INTO `rd_role` VALUES ('1', '超级管理员', '在系统可以进行任何的操作', '1');
INSERT INTO `rd_role` VALUES ('2', '普通管理员', '对系统进行日常的操作', '1');
INSERT INTO `rd_role` VALUES ('3', '文章管理员', '对文章进行添加，修改，浏览，添加分类', '1');
INSERT INTO `rd_role` VALUES ('4', '会员管理员', '对会员进行修改，增加，留言', '1');
INSERT INTO `rd_role` VALUES ('5', '测试组', '对系统进行测试留言', '1');
INSERT INTO `rd_role` VALUES ('6', '商品管理员', '对商品进行修改', '1');
INSERT INTO `rd_role` VALUES ('7', '广告管理员', '对系统的友情链接，首页的广告', '1');

-- ----------------------------
-- Table structure for `rd_role_action`
-- ----------------------------
DROP TABLE IF EXISTS `rd_role_action`;
CREATE TABLE `rd_role_action` (
  `role_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_role_action
-- ----------------------------
INSERT INTO `rd_role_action` VALUES ('3', '24');
INSERT INTO `rd_role_action` VALUES ('3', '28');
INSERT INTO `rd_role_action` VALUES ('3', '27');
INSERT INTO `rd_role_action` VALUES ('3', '26');
INSERT INTO `rd_role_action` VALUES ('3', '25');
INSERT INTO `rd_role_action` VALUES ('3', '23');
INSERT INTO `rd_role_action` VALUES ('7', '38');
INSERT INTO `rd_role_action` VALUES ('7', '37');
INSERT INTO `rd_role_action` VALUES ('7', '35');
INSERT INTO `rd_role_action` VALUES ('7', '36');
INSERT INTO `rd_role_action` VALUES ('7', '34');
INSERT INTO `rd_role_action` VALUES ('6', '16');

-- ----------------------------
-- Table structure for `rd_score`
-- ----------------------------
DROP TABLE IF EXISTS `rd_score`;
CREATE TABLE `rd_score` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rank` varchar(50) NOT NULL,
  `discount` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_score
-- ----------------------------
INSERT INTO `rd_score` VALUES ('3', '青铜', '前台抽奖,卖商品9.8折,到可以注册前台论坛,得到惊喜区的权利');
INSERT INTO `rd_score` VALUES ('4', '白银', '前台抽奖,商品9.5折,论坛普通会员,订购婚礼人');
INSERT INTO `rd_score` VALUES ('5', '黄金', '前台抽奖,商品9折,论坛高级会员,订购婚礼人9折,拥有免费介绍蜜月路线.....');
INSERT INTO `rd_score` VALUES ('6', '铂金', '前台抽奖3次,商品8折,论坛高级会员,订购婚礼人8折,拥有免费介绍蜜月路线,可以无限上传图片.....');
INSERT INTO `rd_score` VALUES ('7', '最强王者', '前台抽奖5次,商品7折,论坛高级会员,订购婚礼人8折,拥有免费介绍蜜月路线,享受婚礼作品上传到网站.....');

-- ----------------------------
-- Table structure for `rd_serve`
-- ----------------------------
DROP TABLE IF EXISTS `rd_serve`;
CREATE TABLE `rd_serve` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(60) NOT NULL,
  `s_time` varchar(32) NOT NULL,
  `area` text NOT NULL,
  `payment` varchar(25) NOT NULL DEFAULT '现金和支付宝',
  `language` varchar(25) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_serve
-- ----------------------------
INSERT INTO `rd_serve` VALUES ('1', '主持人', '24小时', '北京、安徽、宁夏、天津、湖南、上海、云南、河北、新疆、江苏、广西、吉林、山东、内蒙古、甘肃、福建、黑龙江、台湾、广东、湖北、浙江、海南、西藏、香港、贵州、重庆、澳门、辽宁、青海、山西、江西、四川、河南、陕西', '汇款或现金', '中文', '6');
INSERT INTO `rd_serve` VALUES ('2', '主持人', '24小时', '北京、安徽、宁夏、天津、湖南、上海、云南、河北、新疆、江苏、广西、吉林、山东、内蒙古、甘肃、福建、黑龙江、台湾、广东、湖北、浙江、海南、西藏、香港、贵州、重庆、澳门、辽宁、青海、山西、江西、四川、河南、陕西', '汇款或现金', '中文', '7');
INSERT INTO `rd_serve` VALUES ('3', '主持人', '有时间就行', '北京、安徽、宁夏、天津、湖南、上海、云南、河北、新疆、江苏、广西、吉林、山东、内蒙古、甘肃、福建、黑龙江、台湾、广东、湖北、', '现金或网银', '国语', '8');
INSERT INTO `rd_serve` VALUES ('4', '婚宴主持', '24小时', '北京、安徽、宁夏、天津、湖南、上海、云南、河北、新疆、江苏、广西、吉林、山东、内蒙古、甘肃、福建、黑龙江、台湾、广东、湖北、浙江、海南、西藏、香港、贵州、重庆、澳门、辽宁、青海、山西、江西、四川、河南、陕西', '现金或网银', '中文', '9');
INSERT INTO `rd_serve` VALUES ('5', '主持人', '有时间就行', '北京、安徽、宁夏、天津、湖南、上海、云南、河北、新疆、江苏、广西、吉林、山东、内蒙古、甘肃、福建、黑龙江、台湾、广东、湖北、浙江、海南、西藏、香港、贵州、重庆、澳门、辽宁、青海、山西、江西、四川、河南、陕西', '汇款或现金', '中文', '10');
INSERT INTO `rd_serve` VALUES ('6', '造型师', '24小时', '北京周边城市', '汇款或现金', '国语', '14');
INSERT INTO `rd_serve` VALUES ('7', '造型设计', '有时间就行', '北京、安徽、宁夏、天津、湖南、上海、云南、河北、新疆、江苏、广西、吉林、山东、内蒙古、甘肃、福建、黑龙江、台湾、广东、湖北、浙江、海南、西藏、香港、贵州、重庆、澳门、辽宁、青海、山西、江西、四川、河南、陕西', '现金或网银', '中文', '15');
INSERT INTO `rd_serve` VALUES ('8', '摄像师', '有时间就行', '北京、安徽、宁夏、天津、湖南、上海、云南、河北、新疆、江苏、广西、吉林、山东、内蒙古、甘肃、福建、黑龙江、台湾、广东、湖北、浙江、海南、西藏、香港、贵州、重庆、澳门、辽宁、青海、山西、江西、四川、河南、陕西', '现金或网银', '中文', '16');
INSERT INTO `rd_serve` VALUES ('9', '婚礼策划', '24小时', '北京、安徽、宁夏、天津、湖南、上海、云南、河北、新疆、江苏、广西、吉林、山东、内蒙古、甘肃、福建、黑龙江、台湾、广东、湖北、浙江、海南、西藏、香港、贵州、重庆、澳门、辽宁、青海、山西、江西、四川、河南、陕西', '现金或网银', '国语', '17');
INSERT INTO `rd_serve` VALUES ('10', '主持人', '有时间就行', '北京、安徽、宁夏、天津、湖南、上海、云南、河北、新疆、江苏、广西、吉林、山东、内蒙古、甘肃、福建、黑龙江、台湾、广东、湖北、浙江、海南、西藏、香港、贵州、重庆、澳门、辽宁、青海、山西、江西、四川、河南、陕西', '汇款或现金', '中文', '12');
INSERT INTO `rd_serve` VALUES ('11', '婚礼布置', '随叫随到', '北京、安徽、宁夏、天津、湖南、上海、云南、河北、新疆、江苏、广西、吉林、山东、内蒙古、甘肃、福建、黑龙江、台湾、广东、湖北、浙江、海南、西藏、香港、贵州、重庆、澳门、辽宁、青海、山西、江西、四川、河南、陕西', '汇款或现金', '中文 英语', '18');
INSERT INTO `rd_serve` VALUES ('12', '造型师', '二十四小时', '全国各地', '现金', '中文', '19');
INSERT INTO `rd_serve` VALUES ('13', '婚礼摄像', '二十四小时', '北京、安徽、宁夏、天津、湖南、上海、云南、河北、新疆、江苏、广西、吉林、山东、内蒙古、甘肃、福建、黑龙江、台湾、广东、湖北、浙江、海南、西藏、香港、贵州、重庆、澳门、辽宁、青海、山西、江西、四川、河南、陕西', '现金', '中文', '21');
INSERT INTO `rd_serve` VALUES ('14', '婚礼摄像', '二十四小时', '北京、安徽、宁夏、天津、湖南、上海、云南、河北、新疆、江苏、广西、吉林、山东、内蒙古、甘肃、福建、黑龙江、台湾、广东、湖北、浙江、海南、西藏、香港、贵州、重庆、澳门、辽宁、青海、山西、江西、四川、河南、陕西', '现金', '中文', '23');
INSERT INTO `rd_serve` VALUES ('15', '婚礼策划', '二十四小时', '大半个中国', '现金或支付宝', '中文', '24');
INSERT INTO `rd_serve` VALUES ('16', '婚礼布置', '二十四小时', '北京、安徽、宁夏、天津、湖南、上海、云南、河北、新疆、江苏、广西、吉林、山东、内蒙古、甘肃、福建、黑龙江、台湾、广东、湖北、浙江、海南、西藏、香港、贵州、重庆、澳门、辽宁、青海、山西、江西、四川、河南、陕西', '现金或支付宝', '中文', '25');
INSERT INTO `rd_serve` VALUES ('17', '婚礼布置', '二十四小时', '中国大多地方', '现金或支付宝', '中文', '27');
INSERT INTO `rd_serve` VALUES ('18', '婚礼布置', '二十四小时', '中国大多地方', '现金', '中文', '28');

-- ----------------------------
-- Table structure for `rd_settings`
-- ----------------------------
DROP TABLE IF EXISTS `rd_settings`;
CREATE TABLE `rd_settings` (
  `id` int(11) unsigned NOT NULL,
  `sitename` varchar(255) NOT NULL COMMENT '站点名称',
  `url` varchar(255) DEFAULT NULL COMMENT '站点URL',
  `company` varchar(255) DEFAULT NULL COMMENT '公司名',
  `title` varchar(255) DEFAULT NULL COMMENT '首页title',
  `description` varchar(255) DEFAULT NULL COMMENT '站点描述',
  `keywords` varchar(255) DEFAULT NULL COMMENT '站点关键字',
  `icp` varchar(255) DEFAULT NULL COMMENT 'ICP备案号',
  `copyright` varchar(255) DEFAULT NULL COMMENT 'copyright',
  `logo` varchar(255) DEFAULT NULL COMMENT 'logo图片名',
  `kfqq` char(12) DEFAULT NULL COMMENT '客服QQ',
  `kfphone` char(11) DEFAULT NULL COMMENT '客服电话',
  `offline` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '关闭网站',
  `is_kf` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否开启客服',
  `timezone` int(3) unsigned DEFAULT '8' COMMENT '时区设置',
  `registerinfo` text COMMENT '注册信息',
  `email_check` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否开启邮件验证',
  `smtpserver` varchar(25) DEFAULT '163.smtp.com' COMMENT '邮箱服务器地址',
  `smtpserverport` int(11) DEFAULT '25' COMMENT '邮箱服务器端口',
  `smtpusermail` varchar(25) DEFAULT 'admin@163.com' COMMENT '用户邮箱',
  `smtppass` varchar(25) DEFAULT '123456' COMMENT '邮箱密码',
  `smtptest` varchar(255) NOT NULL COMMENT 'SMTP发送测试',
  `reg_close` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '关闭注册',
  `countjs` text COMMENT '流量统计代码',
  `list_size_search` int(11) unsigned NOT NULL DEFAULT '10' COMMENT '搜索列表分页数',
  `list_size_goods` int(11) unsigned NOT NULL DEFAULT '12' COMMENT '商品列表分页数设置',
  `list_size_article` int(11) unsigned NOT NULL DEFAULT '12' COMMENT '文章列表分页数设置',
  `filter_chars` varchar(255) DEFAULT NULL COMMENT '过滤字符,多个用逗号隔开',
  `is_filter` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '过滤字符',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_settings
-- ----------------------------
INSERT INTO `rd_settings` VALUES ('1', '倾爱网', 'http://www.qinai.com/', 'Return Dream', 'return dream', '结婚  婚庆  婚姻 开始的新的旅程', '爱就爱一辈子  倾爱所有的爱', '京ICP备1000340002号', 'Copyright © 2015-2016', '54ad3af33fa3c.jpg', '15364758294', '1381243913', '0', '1', '8', '一、本站服务条款的确认和接纳\r\n本站的各项电子服务的所有权和运作权归本站。本站提供的服务将完全按照其发布的服务条款和操作规则严格执行。用户同意所有服务条款并完成注册程序，才能成为本站的正式用户。用户确认：本协议条款是处理双方权利义务的约定，除非违反国家强制性法律，否则始终有效。在下订单的同时，您也同时承认了您拥有购买这些产品的权利能力和行为能力，并且将您对您在订单中提供的所有信息的真实性负责。\r\n二、服务简介\r\n本站运用自己的操作系统通过国际互联网络为用户提供网络服务。同时，用户必须：\r\n(1)自行配备上网的所需设备，包括个人电脑、调制解调器或其它必备上网装置。\r\n(2)自行负担个人上网所支付的与此服务有关的电话费用、网络费用。\r\n基于本站所提供的网络服务的重要性，用户应同意\r\n(1)提供详尽、准确的个人资料。\r\n(2)不断更新注册资料，符合及时、详尽、准确的要求。\r\n本站不公开用户的姓名、地址、电子邮箱和笔名， 除以下情况外：\r\n(1)用户授权本站透露这些信息。\r\n(2)相应的法律及程序要求本站提供用户的个人资料。\r\n三、价格和数量\r\n本站将尽最大努力保证您所购商品与网站上公布的价格一致。\r\n产品的价格和可获性都在本站上指明，这类信息将随时更改。\r\n您所订购的商品，如果发生缺货，您有权取消定单。\r\n四、送货及费用\r\n本站将会把产品送到您所指定的送货地址。所有在本站上列出的送货时间为参考时间，参考时间的计算是根据库存状况、正常的处理过程和送货时间、送货地点的基础上估计得出的。送货费用根据您选择的配送方式的不同而异。\r\n请清楚准确地填写您的真实姓名、送货地址及联系方式。因如下情况造成订单延迟或无法配送等，本站将不迟延配送的责任：\r\n(1)客户提供错误信息和不详细的地址；\r\n(2)货物送达无人签收，由此造成的重复配送所产生的费用及相关的后果。\r\n(3)不可抗力，例如：自然灾害、交通戒严、突发战争等。\r\n五、服务条款的修改\r\n本站将可能不定期的修改本用户协议的有关条款，一旦条款及服务内容产生变动，本站将会在重要页面上提示修改内容。\r\n六、用户隐私制度\r\n尊重用户个人隐私是本站的一项基本政策。所以，作为对以上第二点人注册资料分析的补充，本站一定不会在未经合法用户授权时公开、编辑或透露其注册资料及保存在本站中的非公开内容，除非有法律许可要求或本站在诚信的基础上认为透露这些信件在以下四种情况是必要的。\r\n七、用户的帐号，密码和安全性\r\n用户一旦注册成功，成为本站的合法用户，将得到一个密码和用户名。您可随时根据指示改变您的密码。用户需谨慎合理的保存、使用用户名和密码。用户若发现任何非法使用用户帐号或存在安全漏洞的情况，请立即通知本站和向公安机关报案。\r\n八、对用户信息的存储和限制\r\n本站有判定用户的行为是否符合国家法律法规规定及本站服务条款权利，如果用户违背了国家法律法规规定或服务条款的规定，本站有中断对其提供网络服务的权利。\r\n九、用户管理\r\n用户单独承担发布内容的责任。用户对服务的使用是根据所有适用于本站的国家法律、地方法律和国际法律标准的。用户必须遵循：\r\n(1)从中国境内向外传输技术性资料时必须符合中国有关法规。\r\n(2)使用网络服务不作非法用途。\r\n(3)不干扰或混乱网络服务。\r\n(4)遵守所有使用网络服务的网络协议、规定、程序和惯例。\r\n用户须承诺不传输任何非法的、骚扰性的、中伤他人的、辱骂性的、恐性的、伤害性的、庸俗的，淫秽等信息资料。另外，用户也不能传输何教唆他人构成犯罪行为的资料；不能传输助长国内不利条件和涉及国家安全的资料；不能传输任何不符合当地法规、国家法律和国际法律的资料。未经许可而非法进入其它电脑系统是禁止的。\r\n若用户的行为不符合以上提到的服务条款，本站将作出独立判断立即取消用户服务帐号。用户需对自己在网上的行为承担法律责任。用户若在本站上散布和传播反动、色情或其它违反国家法律的信息，本站的系统记录有可能作为用户违反法律的证据。\r\n十、通告\r\n所有发给用户的通告都可通过重要页面的公告或电子邮件或常规的信件传送。用户协议条款的修改、服务变更、或其它重要事件的通告都会以此形式进行。\r\n十一、参与广告策划\r\n用户在他们发表的信息中加入宣传资料或参与广告策划，在本站的免费服务上展示他们的产品，任何这类促销方法，包括运输货物、付款、服务、商业条件、担保及与广告有关的描述都只是在相应的用户和广告销售商之间发生。\r\n十二、网络服务内容的所有权\r\n本站定义的网络服务内容包括：文字、软件、声音、图片、录象、图表、广告中的全部内容；电子邮件的全部内容；本站为用户提供的其它信息。所有这些内容受版权、商标、标签和其它财产所有权法律的保护。所以，用户只能在本站和广告商授权下才能使用这些内容，而不能擅自复制、再造这些内容、或创造与内容有关的派生产品。本站所有的文章版权归原文作者和本站共同所有，任何人需要转载本站的文章，必须征得原文作者或本站授权。\r\n十三、责任限制\r\n如因不可抗力或其它本站无法控制的原因使本站销售系统崩溃或无法正常使用导致网上交易无法完成或丢失有关的信息、记录等本站会尽可能合理地协助处理善后事宜，并努力使客户免受经济损失。\r\n十四、法律管辖和适用\r\n本协议的订立、执行和解释及争议的解决均应适用中国法律。\r\n如发生本站服务条款与中国法律相抵触时，则这些条款将完全按法律规定重新解释，而其它合法条款则依旧保持对用户产生法律效力和影响。\r\n本协议的规定是可分割的，如本协议任何规定被裁定为无效或不可执行，该规定可被删除而其余条款应予以执行。\r\n如双方就本协议内容或其执行发生任何争议，双方应尽力友好协商解决；协商不成时，任何一方均可向本站所在地的人民法院提起诉讼。', '1', 'smtp.qq.com', '456', '1536475829@qq.com', '123456', '麻辣·鸡块', '0', '法萨芬', '15', '13', '15', '', '0');

-- ----------------------------
-- Table structure for `rd_special`
-- ----------------------------
DROP TABLE IF EXISTS `rd_special`;
CREATE TABLE `rd_special` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_special
-- ----------------------------

-- ----------------------------
-- Table structure for `rd_users`
-- ----------------------------
DROP TABLE IF EXISTS `rd_users`;
CREATE TABLE `rd_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `userpwd` char(32) NOT NULL,
  `tname` varchar(30) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `zipcode` int(8) DEFAULT NULL,
  `phone` varchar(16) NOT NULL DEFAULT '',
  `regtime` int(11) DEFAULT NULL,
  `islogin` tinyint(2) NOT NULL DEFAULT '0',
  `isdel` tinyint(2) NOT NULL DEFAULT '1',
  `is_info` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `points` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_users
-- ----------------------------
INSERT INTO `rd_users` VALUES ('29', 'xiaohongwei', '828fd9255753432d51df95eb62d61722', '卡梅伦', '123456@qq.com', '美国宁夏省', '677777', '18688889588', '1422198366', '0', '1', '1', '112');

-- ----------------------------
-- Table structure for `rd_wedding`
-- ----------------------------
DROP TABLE IF EXISTS `rd_wedding`;
CREATE TABLE `rd_wedding` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `content` varchar(120) NOT NULL,
  `sale` decimal(10,0) NOT NULL,
  `pic_name` varchar(120) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `info` text,
  `addtime` int(11) DEFAULT '0',
  `is_delete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_wedding
-- ----------------------------
INSERT INTO `rd_wedding` VALUES ('6', '兄弟连IT婚纱摄影', '我们只显现最美的你', '4000', 'Uploads/Wedding/54c5f70f5943d.jpg', '3800', '18238818509', '<p><img src=\"/rd/Public/Uploads/Wedding/54c5f6f714140.jpg\" height=\"500\" width=\"600\" alt=\"\" /></p><p></p><p>“<span style=\"font-family:宋体;\">这个世界一直都是现实残酷的，我们谁都没有权利选择出生在一个怎样的家庭，生活在一个怎样的社会，但是我们能选择成为一个怎样的人，你不能放弃这唯一的一点权利。</span><span style=\"font-family:Times New Roman;\">”</span></p><p></p><p>“<span style=\"font-family:宋体;\">这个世界一直都是现实残酷的，我们谁都没有权利选择出生在一个怎样的家庭，生活在一个怎样的社会，但是我们能选择成为一个怎样的人，你不能放弃这唯一的一点权利。</span><span style=\"font-family:Times New Roman;\">”</span></p><p></p><p>“<span style=\"font-family:宋体;\">这个世界一直都是现实残酷的，我们谁都没有权利选择出生在一个怎样的家庭，生活在一个怎样的社会，但是我们能选择成为一个怎样的人，你不能放弃这唯一的一点权利。</span><span style=\"font-family:Times New Roman;\">”</span></p><br />', '1422259983', '0');
INSERT INTO `rd_wedding` VALUES ('2', '蒙娜丽莎蒂芬妮礼服馆 ', '蒙娜丽莎蒂芬妮礼服馆 ', '899', 'Uploads/Wedding/54c59bc8d7823.jpg', '800', '18238818509', '<p>蒙娜丽莎蒂芬妮礼服馆 售卖方式：按件租赁价格：8000以上套餐内容：皇室婚纱pronovias（租用价格）领型(主纱)：一字肩摆型(主纱)：鱼尾流行元素(主纱)：蕾丝0元试纱：无</p><p><img src=\"/rd/Public/Uploads/Wedding/54c59bb6a822a.jpg\" height=\"500\" width=\"600\" alt=\"\" /><br /></p>', '1422236616', '0');
INSERT INTO `rd_wedding` VALUES ('3', '蒙娜丽莎蒂芬妮礼服馆', '最美的微笑', '500', 'Uploads/Wedding/54c59a8c54de2.jpg', '400', '18238818509', '售卖方式：按件定制价格：8000以上套餐内容：单件定制领型(主纱)：一字肩摆型(主纱)：鱼尾流行元素(主纱)：真丝0元试纱：有', '1422236300', '0');
INSERT INTO `rd_wedding` VALUES ('4', '蒙娜丽莎蒂芬妮礼服馆1', '蒙娜丽莎蒂芬妮礼服馆', '1800', 'Uploads/Wedding/54c59b8b538bb.jpg', '900', '18238818509', '<p>一直很喜欢蒙娜丽莎婚纱摄影的风格，这次在大众点评参加0元试婚纱的活动很开心，最幸运的是遇到了活泼开朗的美女闫言为我们服务。没有任何强制性消费，而且可以随便拍摄店里可供试穿的婚纱和礼服，觉得心情既轻松又愉悦，很顺利的试穿完我喜欢的婚纱。闫言的眼光很好，为我推荐了一款既复古又很流行的鱼尾纱，深得我心，还有一款今年很流行的半透明的A字裙，每一件的上身效果都很好。最开心的试穿经历就是，体验了自己心水的美服，还结识了志趣相投的朋友。本次试穿经历很棒，希望以后有更多的机会去试穿。最后，闫言为我领取了试婚纱的小赠品，一副隐形bra，超惊喜哦，因为非常实用！今天辛苦美女闫言啦，支持蒂芬妮哦，赞~❤</p><p><img src=\"/rd/Public/Uploads/Wedding/54c59b7ade79f.jpg\" height=\"500\" width=\"600\" alt=\"\" /><br /></p>', '1422236555', '0');
INSERT INTO `rd_wedding` VALUES ('5', '这个世界真美好工作室', '我们只显现最美的你', '2000', 'Uploads/Wedding/54c5f26b605b9.jpg', '1800', '18238818509', '<p></p><p>同桌是一个小女孩，那天她穿着一双很旧的白色网球鞋，鞋子布满了污渍和灰尘，这双鞋从我坐在她旁边时她便一直没换过，来到教室的时候她看着我脚下的鞋对我说，鞋子真好看。下课时一些小伙伴来看我的新鞋子，我心里开心又骄傲。可我注意到同桌的小女孩一整天总是在把自己的脚往椅子后面缩，她显得很不自在。</p><p><img src=\"/rd/Public/Uploads/Wedding/54c5f2601b1bc.jpg\" height=\"500\" width=\"600\" alt=\"\" /><br /></p>', '1422258795', '0');
INSERT INTO `rd_wedding` VALUES ('7', '兄弟连IT婚纱', '最美的微笑', '5000', 'Uploads/Wedding/54c5f77d9565f.jpg', '3800', '18238818509', '<p><img src=\"/rd/Public/Uploads/Wedding/54c5f7690743e.jpg\" height=\"500\" width=\"600\" alt=\"\" /></p><p></p><p>“<span style=\"font-family:宋体;\">这个世界一直都是现实残酷的，我们谁都没有权利选择出生在一个怎样的家庭，生活在一个怎样的社会，但是我们能选择成为一个怎样的人，你不能放弃这唯一的一点权利。</span><span style=\"font-family:Times New Roman;\">”</span></p><p>“<span style=\"font-family:宋体;\">这个世界一直都是现实残酷的，我们谁都没有权利选择出生在一个怎样的家庭，生活在一个怎样的社会，但是我们能选择成为一个怎样的人，你不能放弃这唯一的一点权利。</span><span style=\"font-family:Times New Roman;\">”</span></p><br />', '1422260093', '0');
INSERT INTO `rd_wedding` VALUES ('8', '兄弟连IT婚纱', '我们只显现最美的你', '4000', 'Uploads/Wedding/54c5f80aecd24.jpg', '3800', '18238818509', '<p>每个人都是不断的在阴暗和光明中交替，人前逞强人后舔伤，我们都会突然被负面情绪包围的喘不过气，不要对自己太苛刻，悲伤失落的时候就允许自己在阴影中停留一阵，只要心一直在向着有光的方向前进就好，只要还走在路上就好。</p><p><br /></p><p><img src=\"/rd/Public/Uploads/Wedding/54c5f8024b915.jpg\" height=\"500\" width=\"600\" alt=\"\" /><br /></p>', '1422260234', '0');
INSERT INTO `rd_wedding` VALUES ('9', '今生有缘', '今生有缘，一生相依', '4000', 'Uploads/Wedding/54c5f8c55ee4b.jpg', '3000', '18238818509', '<p><img src=\"/rd/Public/Uploads/Wedding/54c5f8ae550cd.jpg\" height=\"500\" width=\"600\" alt=\"\" /></p><p></p><p>每个人都是不断的在阴暗和光明中交替，人前逞强人后舔伤，我们都会突然被负面情绪包围的喘不过气，不要对自己太苛刻，悲伤失落的时候就允许自己在阴影中停留一阵，只要心一直在向着有光的方向前进就好，只要还走在路上就好。</p><p></p><p>每个人都是不断的在阴暗和光明中交替，人前逞强人后舔伤，我们都会突然被负面情绪包围的喘不过气，不要对自己太苛刻，悲伤失落的时候就允许自己在阴影中停留一阵，只要心一直在向着有光的方向前进就好，只要还走在路上就好。</p><br />', '1422260421', '0');

-- ----------------------------
-- Table structure for `rd_works`
-- ----------------------------
DROP TABLE IF EXISTS `rd_works`;
CREATE TABLE `rd_works` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rd_works
-- ----------------------------
