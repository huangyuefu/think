/*
Navicat MySQL Data Transfer

Source Server         : demo
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-06-30 09:59:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin_image`
-- ----------------------------
DROP TABLE IF EXISTS `admin_image`;
CREATE TABLE `admin_image` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(50) NOT NULL,
  `listorder` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `state` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_image
-- ----------------------------
INSERT INTO `admin_image` VALUES ('11', '41', '/think/public/admin_image\\20170628\\148fd64a0d79042928ee208ee750a187.gif', '轮播图1', 'banner1', '0', '1498655383', '1498655383', '1');
INSERT INTO `admin_image` VALUES ('12', '41', '/think/public/admin_image\\20170628\\f47f3e739be310cb0d6d1056a10b5cb9.jpg', '轮播图2', 'banner2', '0', '1498655416', '1498714225', '1');
INSERT INTO `admin_image` VALUES ('13', '41', '/think/public/admin_image\\20170628\\8d2f99f2005c4dc6f4a46145d00da356.gif', '轮播图3', 'banner3', '0', '1498655473', '1498663934', '1');
INSERT INTO `admin_image` VALUES ('14', '43', '/think/public/admin_image\\20170629\\b525acd2f26dd3633dfa05a40534b086.gif', '中江挂面', 'guamian', '0', '1498701506', '1498701506', '1');
INSERT INTO `admin_image` VALUES ('15', '43', '/think/public/admin_image\\20170629\\28068b67363b86dfbe650c4031408b4d.gif', '中江柚', 'you', '0', '1498701564', '1498743595', '-1');
INSERT INTO `admin_image` VALUES ('16', '43', '/think/public/admin_image\\20170629\\e600233e89e55211811c571118dff119.gif', '中江白芍', 'baishao', '0', '1498701625', '1498701625', '1');
INSERT INTO `admin_image` VALUES ('17', '43', '/think/public/admin_image\\20170629\\1e2fb6ca62760d1034124d372dcdc8cc.gif', '中江当参', 'dangsheng', '0', '1498701692', '1498701692', '1');
INSERT INTO `admin_image` VALUES ('18', '43', '/think/public/admin_image\\20170629\\6ffbc36f67952ab1f1b8bc5f03ac3be9.gif', '中江竹编', 'zubian', '0', '1498701750', '1498701750', '1');
INSERT INTO `admin_image` VALUES ('19', '43', '/think/public/admin_image\\20170629\\9aea69b5bc95ebfed8c6b5ca061d4665.gif', '中江八宝油膏', 'yougao', '0', '1498701806', '1498701806', '1');
INSERT INTO `admin_image` VALUES ('20', '44', '/think/public/admin_image\\20170629\\d2cd6c9004484a7767a4ed8b1b94a15a.gif', '推荐单位1', 'tuijian1', '0', '1498701937', '1498701937', '1');
INSERT INTO `admin_image` VALUES ('21', '44', '/think/public/admin_image\\20170629\\fc8ffb5f6d7988fe65dc42a3d15860b1.gif', '推荐单位2', 'tuijian2', '0', '1498701966', '1498701966', '1');
INSERT INTO `admin_image` VALUES ('22', '44', '/think/public/admin_image\\20170629\\a6571c2379a7289494a4325dfc7f2102.gif', '推荐单位3', 'tuijian3', '0', '1498702001', '1498702001', '1');
INSERT INTO `admin_image` VALUES ('23', '43', '/think/public/admin_image\\20170629\\cdada5604215c5d555b99f341452369a.gif', '推荐单位4', 'tuijian4', '0', '1498702321', '1498704737', '-1');
INSERT INTO `admin_image` VALUES ('24', '43', '/think/public/admin_image\\20170629\\21457096401d3e0b72edcadddec689c8.gif', '推荐单位5', 'tuijian5', '0', '1498702386', '1498714254', '-1');
INSERT INTO `admin_image` VALUES ('25', '44', '/think/public/admin_image\\20170629\\6f2f9d3567fe80085ee173f186511c82.gif', '推荐单位5', ' tuijan5', '0', '1498702827', '1498715364', '-1');
INSERT INTO `admin_image` VALUES ('26', '47', '/think/public/admin_image\\20170629\\8d945870d2a11c8d3254d5b469f9e12a.gif', '首页最新信息图', 'zuixin', '0', '1498703798', '1498703798', '1');
INSERT INTO `admin_image` VALUES ('27', '48', '/think/public/admin_image\\20170629\\a401e0539f94e04ee8163742fec43596.gif', '首页行业快讯图', 'kuaixun', '0', '1498703860', '1498703860', '1');
INSERT INTO `admin_image` VALUES ('28', '44', '', '推荐单位4', 'tuijian4', '0', '1498704667', '1498715792', '-1');
INSERT INTO `admin_image` VALUES ('29', '44', '/think/public/admin_image\\20170629\\4eccb8e6deea68410d82e390b08549dc.gif', '推荐合作单位4', 'tj', '0', '1498715461', '1498715461', '0');
INSERT INTO `admin_image` VALUES ('30', '44', '/think/public/admin_image\\20170629\\5fa237157daba3d12c974e576f4c7de9.gif', '推荐单位5', 'tj', '0', '1498715494', '1498715494', '0');
INSERT INTO `admin_image` VALUES ('31', '55', '/think/public/admin_image\\20170629\\58880dc3231aec656e3d03f5c917afdb.gif', '小广告', 'gg', '0', '1498716511', '1498751270', '1');
INSERT INTO `admin_image` VALUES ('32', '42', '/think/public/admin_image\\20170629\\7cb5670c073a14e4be93a2e05c867324.gif', '中江瓜喽', 'gualou', '0', '1498718123', '1498751264', '1');
INSERT INTO `admin_image` VALUES ('36', '62', '/think/public/admin_image\\20170629\\bab1000cfa9f64e224200a0bbefb118f.gif', '生产基地', '', '0', '1498750769', '1498751251', '1');
INSERT INTO `admin_image` VALUES ('35', '43', '/think/public/admin_image\\20170629\\7eb08fbcacb2509694b61e218acd65e2.gif', '中江柚', '{:url(\'index/index/product\')}', '26', '1498743526', '1498743526', '1');
INSERT INTO `admin_image` VALUES ('37', '62', '/think/public/admin_image\\20170629\\b3acb223105d6787c0cff551abcdb424.gif', '生产基地图', '', '25', '1498750808', '1498750965', '1');
INSERT INTO `admin_image` VALUES ('38', '62', '/think/public/admin_image\\20170629\\db5725fc6cb1442bebf5f751ee9825e0.gif', '生产基地图3', '', '0', '1498751183', '1498751257', '1');
INSERT INTO `admin_image` VALUES ('39', '61', '/think/public/admin_image\\20170629\\53fa81a2e238c07141112b5fd9c9829c.gif', '致富故事图', '', '0', '1498751329', '1498751348', '1');
INSERT INTO `admin_image` VALUES ('40', '60', '/think/public/admin_image\\20170629\\f1eca89a65de6c64ad5f4cb92a0eab98.gif', '行业前景', '', '0', '1498751428', '1498751447', '1');

-- ----------------------------
-- Table structure for `admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `is_main` tinyint(1) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `describe` varchar(500) NOT NULL,
  `sex` enum('男','女') NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES ('3', 'admin1', 'admin1', '0', '1243242', '23432424', '', '', '0', '0');
INSERT INTO `admin_user` VALUES ('4', 'admin3', 'admin3', '0', '3424', '1432432', '', '', '0', '0');

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `sort` tinyint(100) NOT NULL,
  `state` tinyint(100) NOT NULL,
  `category_id` varchar(200) NOT NULL,
  `sources` varchar(100) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('8', '大量优质新鲜草莓上市了', '', '<p>草莓很好吃</p>', '1', '1', '46', 'baidu', '1498703034', '1498703034');
INSERT INTO `article` VALUES ('9', '质优价廉的山核桃大量上市..！', '', '<p>老师的结果来看是大家开了个机关领导风格的联发科的国家劳动法</p>', '2', '1', '46', 'baidu', '1498703102', '1498703102');
INSERT INTO `article` VALUES ('10', '·大量供应红富士苹果！', '', '<p>就是大方公开数据管理</p>', '4', '1', '46', 'baidu', '1498703158', '1498703158');
INSERT INTO `article` VALUES ('11', '·春季时令蔬菜已上市！', '', '<p>带来开发工具给甲方收到了几个<img src=\"http://img.baidu.com/hi/jx2/j_0027.gif\"/></p>', '4', '1', '46', 'baidu', '1498703225', '1498703225');
INSERT INTO `article` VALUES ('12', '·山东大雨浇“落”无花果 斤..', '', '<p>发了个空间流口水的分管局领导的礼服高级了</p>', '18', '1', '47', 'taobao', '1498703379', '1498718681');
INSERT INTO `article` VALUES ('13', '·江苏常州：近期“菜走势..', '', '<p>董事局佛罗红色的减肥了</p>', '9', '1', '47', 'taobao', '1498703424', '1498703424');
INSERT INTO `article` VALUES ('14', '·国庆将至 四川内江提前入..', '', '<p>是雷锋精神来打开</p>', '10', '1', '47', 'taobao', '1498703469', '1498703469');
INSERT INTO `article` VALUES ('15', '国庆节前山东青水果价格..', '', '<p>路口及关联方的时刻离开国际饭店了</p>', '11', '1', '47', 'taobao', '1498703511', '1498703511');
INSERT INTO `article` VALUES ('16', '国庆节前山东青水果价格..', '', '<p>都说了分手快乐飞</p>', '14', '1', '48', 'jingdong', '1498703583', '1498703583');
INSERT INTO `article` VALUES ('17', '刷卡缴费的空间', '', '<p>看到数据分类考试的加分了<img src=\"http://img.baidu.com/hi/jx2/j_0003.gif\"/></p>', '15', '1', '48', 'jingdong', '1498703627', '1498703627');
INSERT INTO `article` VALUES ('18', '数据开放的交流时', '', '<p>的快速减肥了时间到了<img src=\"http://img.baidu.com/hi/jx2/j_0057.gif\"/></p>', '16', '1', '48', 'jingdong', '1498703678', '1498703678');
INSERT INTO `article` VALUES ('19', '时间浪费是看见了家里', '', '<p>可浪费多少公里流口水的法国家乐福<img src=\"http://img.baidu.com/hi/jx2/j_0025.gif\"/></p>', '17', '1', '48', 'jingdong', '1498703716', '1498718677');
INSERT INTO `article` VALUES ('20', '技术支持', '', '<p><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">一、中江柚品种特性及发展情况</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;中江柚属于文旦柚系品种，引自福建，首栽于我市永安乡，母树在中江永安乡场镇。1993年参加四川省优质果品评选，以总分83.6分被评为省优果品，近年来得到了中江县委、县政府的高度重视，得到了快速发展，直到2000年底，共发展中江柚250万株左右，但产量只有80万个左右，主要集中在子金乡印台村。该品种单果重2.5－3斤左右，倒卵圆形，金黄色，果上有油胞、芳香，果皮薄，果肉脆嫩化渣、汁多味甜，可溶性固形物达11.6%，种子少或无核；果实较耐贮藏；属于早熟品种，9月下旬-10月上旬成熟；树势中庸，易栽培，易丰产，一年栽，3-4年可试花挂果，6-7年可丰产，亩产可达5000斤以上。其缺点是易裂果，裂果率可达10-20%，故应选择6-7月份水源能解决的地方发展栽培。</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">二、中江柚丰产优质栽培技术</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;为了使中江柚尽快投产，产生效益，为我们致富奔小康作出贡献，我们就应学习、掌握和采用先进的科学的中江柚栽培技术，该项技术可用八个字来概括，即：种（良种壮苗）、建（高标准建园）、肥（科学施肥）、水（适时排灌）、剪（合理修剪）、保（保花保果）、治（加强病虫防治）、促（控长促花）。具体来讲：</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">（一）积极推广优良品种，培育发展良种壮苗</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">良种壮苗是中江柚获得“三高”的物质基础，首先必须加强对中江柚的提纯选优，从中选出裂果率低或不裂果、丰产稳产优质的优选单株，进行繁殖推广；其次要培育良种壮苗，发展栽植良种壮苗，杜绝劣等苗出圃。苗木质量好坏，直接影响到成活率、树体生长发育、丰产性和果实品质等，良种壮苗要求：（1）无检疫性病虫害，如黄龙病、溃疡病、果实蝇等；（2）品种纯正，砧木优良，嫁接部位愈合良好；（3）苗木生长健壮，主干端直，一般苗高40厘米以上，茎粗0.8厘米以上，并有3个以上分枝，每枝长20厘米以上；（4）根系完整，主侧根发达，一般主根长16.5厘米以上，并且有3-4条侧根，须根发达。</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">（二）高标准建园，确保质量效益</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;柚树根深树高，经济寿命长，几十年上百年固定在同一地点生长结果。因此，新建柚园只有始终坚持高标准、高质量建园，才能获得高产、优质和高效益。</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">1、应选择坡度在25度以下的山地、丘陵和排灌方便、土壤疏松湿润的地方建园。</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">2、整地时必须全面修筑等高反坡梯田和保土贮水竹节沟及梯田外缘作梯梗，并种上香根草、百喜草等。</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">3、新建园应坚持“三大一篓”，即大穴、大肥、大苗和营养篓（袋）假植。所谓大穴，就是挖深、宽一米的壕沟或一米见方的穴；大肥，就是每立方米分3-4层填埋20公斤稻草或绿肥、厩肥100-150斤、石灰1-1.5斤、磷肥1-1.5公斤、麸饼1-1.5公斤作基肥；大苗，按良种壮苗出圃；营养篓（袋）假植带土移栽（营养土配置，以菜园土、水稻田表土、干塘泥、火土为基础，每立方土中加入人粪2担、磷肥2-3公斤、猪牛粪3-4担拌匀成堆，外用稀泥密封堆沤30-45天，9月份用营养篓（袋）装营养土假植小苗，第二年9月份带土移栽）。</span></p>', '1', '1', '59', '合作社', '1498750295', '1498750326');
INSERT INTO `article` VALUES ('21', '合作社介绍', '', '<p><strong style=\"margin: 0px; padding: 0px; border: none; color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\">宏波养殖实业有限公司</strong><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">创立于2009年，是中江县一家集养殖、种植、餐饮、地产、矿产和网络为一体的多元化民营企业。现有员工122人，其中高级技术人员及管理人员15人。公司自成立以来，本着以诚信为本求实创新、勇于开拓的精神，大力进行企业经营结构调整，为力争三年内成为中江的龙头企业，五年内成为四川知名企业，十年后成为上市公司的远大目标而奋斗。</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">一、养殖业：</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">肉牛基地于2009年元月正式启动，基地位于县城南面20余公里，距离省会成都100公里，有省道罗桂路穿行而过的中江县双龙镇。基地采用了公司加农户的发展模式，以农业产业化为发展思路。力争使该基地发展成为年出栏肉牛2000余头以上，创产值逾2000余万元的大型养殖基地。目前基地配有畜牧师3人，具体负责指导农户牛舍建设、青饲料储藏、疫病防治和饲料搭配等工作。</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">二、种植业：</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">宏波柚子林生态农业观光园占地150余亩，离县城仅2公里，位于东北镇喜胜村是中江县最大的中江柚和福建沙田柚的种植基地，年产柚子50至100吨。现有高级农艺师1人，助理农艺师2人，技工2人，目前基地正计划改良品种，力争年产值能达到100余万元。为了提高土地利用价值，同时该基地正在筹建中江食用菌核心试范区。利用牛粪开发，生产食用菌。预计到2011年初，该园将建成集养殖。种植，观光，休闲为一体的现代循环农业经济园。</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">三、餐饮业：</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">蟠桃园休闲庄位于中江县通济镇，占地20余亩，交通便利，是集餐饮、休闲、观光为一体的农家乐，其中有高级厨师2名，中级厨师3名，员工7人，能同时容纳300余人用餐。自2009年元月开业以来，相继推出三月赏桃花，六月品“蟠桃”的主题活动，吸引了大批餐饮游客。现日均营业额千元以上，年产值百万元以上。</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">四、矿产业：</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">公司现在西藏山南拥有一9平方公里的矿山，经专家仔细勘测，已探明有丰富的锑矿资源，目前正在开采中。预计年产锑矿8万吨，总产值近亿元。</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">五、地产业：</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">为了拉开向地产业进军的序幕，公司现已在中江县双龙镇征地65亩，进行农村场镇综合建设，届时将建成集农贸市场、街道、商品房、商铺、为一体的农村新镇。此项目现在已经破土动工，总投资3000多万元，预计将于2011年全面竣工。同时在永兴镇括地59亩投入小城镇建设。此项目正在运行中。</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">六、网络运作：</span><br style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">2009年8月，公司投资8万余元自主建成3G网络“四川肉牛网”和“四川养殖网”。这也标志着公司将战略思路', '24', '1', '57', '合作社', '1498750404', '1498750411');
INSERT INTO `article` VALUES ('22', '行业前景', '', '<p><span style=\"color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);\">截止2009年底，已建成县城工业集中发展区面积6平方公里，加上乡镇特色工业小区，已集聚规模以上企业107家，比上年增加18家，占全县规模以上企业总数的71.3%，实现工业总产值66.2亿元。县城工业集中区有规模以上企业54家，实现工业总产值39.5亿元，工业增加值10.63亿元，主营业务收入38.8亿元，利税总额10082万元，利润总额6325万元，分别占到了全县规模以上企业的44.4%、46.4%、44.5%、31.9%、31.5%。工业集中发展区已经成为县域经济发展的重要载体和排头兵</span></p>', '25', '1', '60', '合作社', '1498750513', '1498750517');
INSERT INTO `article` VALUES ('23', '致富故事', '', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: none; color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal;\">&nbsp; 江县童游街道水尾村赤坭土布自然村人口不到100人，却有个不平凡的致富能手，他叫曹宗成，今年53岁。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: none; color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal;\">　　</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: none; color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;曹宗成致富的故事从1991年开始。当时，他一男一女两个孩子在城里读小学，一年借读费要200元，这对于曹宗成一家来说是笔大数目。曹宗成一家四口人，分得10亩农田，一年收入也在2000元左右。生活的艰辛，逼得曹宗成不得不另谋出路，赤坭土布后山四里处有一片30多亩的荒山，长年无人打理。曹宗成觉得可惜，他主动找到村委会，要求承包这片山。经过多次协商，曹宗成最终以一次性付4200元的价格取得这片山61年经营权。东拼西借，曹宗成终于凑足了这笔钱。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: none; color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;1992年开春，曹宗成在山的东面种了10多亩蜜桔与蜜柚，在山的西面种下了20亩的板栗。1996年，蜜桔开始挂果，1997年蜜柚也开始挂果，看着树上的果实，曹宗成喜上眉梢，多年辛苦的劳作终于有了收获。天有不测风云，1997年，一场大雪把曹宗成六七年的心血化为乌有，所有的果树都被冻死了。曹宗成没有低头，他决定种一种效益快又能防冻的新品种水果——青花梨。1998年春，曹宗成种了10亩青花梨。去年，这片青花梨开始结果。曹宗成采得梨子500多公斤。收入超过1000元。早先种下的板栗，2002年也开始挂果，开始有了收入。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: none; color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal;\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: none; color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal;\">　　赤坭土布后山还有一片属于村集体的杨梅山，因为缺少管理，长势一直不好，村里多次提出要承包给村民管理，却一直无人问津。为了村集体的利益，曹宗成包下了这座山。在曹宗成起早贪黑的呵护下，这片山不到两年便有了变化，杨梅越长越好，尽管去年大旱，但还是结出了累累硕果，曹宗成获得了近3000元的收入。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: none; color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal;\">　　水尾村在建阳是以竹多出名的。早在1981年，联产承包到户时，曹宗成便在田头种下了第一批竹。自包了村里的山后，他种竹的劲头更大了，他在承包的山边空隙处、家里的自留地等处种下了竹子。现在，他的竹林总计达20多亩，每年可挖不少的鲜笋上市，总价值超过万元。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: none; color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal;\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: none; color: rgb(102, 102, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12px; white-space: normal;\">　　山上空地多，与外界接触少，疾病传播渠道少，适宜于养鸡。1999年，曹宗成开始养鸡，数量达300只，收入超过千元。在之后的几年里，他不断追加投资，加大养鸡批次，收入也随之跟着增加。2003年。。。</p><p><br/></p>', '25', '1', '61', '合作社', '1498750619', '1498750624');

-- ----------------------------
-- Table structure for `bis_base_info`
-- ----------------------------
DROP TABLE IF EXISTS `bis_base_info`;
CREATE TABLE `bis_base_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `licence_logo` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `city_id` int(11) unsigned NOT NULL DEFAULT '0',
  `city_path` varchar(50) NOT NULL DEFAULT '',
  `bank_info` varchar(50) NOT NULL DEFAULT '',
  `money` decimal(20,2) NOT NULL DEFAULT '0.00',
  `bank_name` varchar(50) NOT NULL DEFAULT '',
  `bank_user` varchar(50) NOT NULL DEFAULT '',
  `faren` varchar(20) NOT NULL DEFAULT '',
  `faren_tel` varchar(20) NOT NULL DEFAULT '',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bis_base_info
-- ----------------------------
INSERT INTO `bis_base_info` VALUES ('14', 'fgdg', '1084581212@qq.com', '/think/public/upload\\20170626\\258645bc9f3e4f61b486bf60f5ba2296.jpg', '/think/public/upload\\20170626\\453e869727019b9dc1f501171bc8c948.jpg', '', '1', '1', '3212341412', '0.00', 'sfdj', 'sfds', 'fsds', 'sfds', '0', '0', '1498488189', '1498488189');
INSERT INTO `bis_base_info` VALUES ('15', 'fgdg', '1084581212@qq.com', '/think/public/upload\\20170626\\258645bc9f3e4f61b486bf60f5ba2296.jpg', '/think/public/upload\\20170626\\453e869727019b9dc1f501171bc8c948.jpg', '', '1', '1', '3212341412', '0.00', 'sfdj', 'sfds', 'fsds', 'sfds', '0', '0', '1498488234', '1498488234');
INSERT INTO `bis_base_info` VALUES ('16', '皮包公司', '1084581212@qq.com', '/think/public/upload\\20170626\\b878de4bca1af5f191d2c9e82654d613.jpg', '/think/public/upload\\20170626\\82fdc36fcf4b42d3d1ce62982e885d30.jpg', '<p>路上看到解放路看到</p>', '1', '1,2', '143243242', '0.00', '连开三家分店', '是的', '士大夫', '123424', '0', '0', '1498489835', '1498489835');

-- ----------------------------
-- Table structure for `bis_totle_info`
-- ----------------------------
DROP TABLE IF EXISTS `bis_totle_info`;
CREATE TABLE `bis_totle_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `contact` varchar(20) NOT NULL DEFAULT '',
  `xpoint` varchar(20) NOT NULL DEFAULT '',
  `ypoint` varchar(20) NOT NULL DEFAULT '',
  `bis_id` int(11) unsigned NOT NULL DEFAULT '0',
  `open_time` int(11) unsigned NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `is_main` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `api_address` varchar(255) NOT NULL DEFAULT '',
  `city_id` int(11) unsigned NOT NULL DEFAULT '0',
  `city_path` varchar(50) NOT NULL DEFAULT '',
  `category_id` int(11) unsigned NOT NULL DEFAULT '0',
  `category_path` varchar(50) NOT NULL DEFAULT '',
  `bank_info` varchar(50) NOT NULL DEFAULT '',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`),
  KEY `bis_id` (`bis_id`),
  KEY `category_id` (`category_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bis_totle_info
-- ----------------------------
INSERT INTO `bis_totle_info` VALUES ('7', '皮包公司', '/think/public/upload\\20170626\\b878de4bca1af5f191d2c9e82654d613.jpg', '', '143243252345', '是来看风景的', '', '', '7', '0', '<p>士大夫</p>', '1', '成都青羊区南桥视窗', '0', '1,2', '3', '3,6', '', '0', '1498489835', '1498489835');

-- ----------------------------
-- Table structure for `bis_user`
-- ----------------------------
DROP TABLE IF EXISTS `bis_user`;
CREATE TABLE `bis_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `code` varchar(10) NOT NULL DEFAULT '',
  `last_login_ip` varchar(20) NOT NULL DEFAULT '',
  `last_login_time` int(11) unsigned NOT NULL DEFAULT '0',
  `is_main` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bis_user
-- ----------------------------
INSERT INTO `bis_user` VALUES ('7', 'xiayin', 'f67ce42a6382a91ac61cb6db5adecddd', '169', '', '0', '1', '0', '1', '1498489835', '1498489835');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cate` varchar(50) NOT NULL DEFAULT '',
  `url` varchar(200) NOT NULL,
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `sort` int(8) unsigned NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('33', '行业动态', '', '0', '0', '1', '1498654493', '1498656886');
INSERT INTO `category` VALUES ('34', '行业信息', '', '33', '0', '1', '1498654503', '1498654533');
INSERT INTO `category` VALUES ('35', '最新信息', '', '33', '0', '1', '1498654589', '1498654589');
INSERT INTO `category` VALUES ('36', '展会信息', '', '33', '0', '1', '1498654611', '1498654611');
INSERT INTO `category` VALUES ('37', '市场信息', '', '33', '0', '1', '1498654654', '1498654654');
INSERT INTO `category` VALUES ('38', '网站首页', '', '0', '0', '1', '1498654675', '1498654675');
INSERT INTO `category` VALUES ('39', '交易专区', '', '0', '0', '1', '1498654694', '1498656888');
INSERT INTO `category` VALUES ('40', '给我留言', '', '0', '0', '1', '1498654707', '1498654707');
INSERT INTO `category` VALUES ('41', '轮播', '', '38', '0', '1', '1498654755', '1498654755');
INSERT INTO `category` VALUES ('42', '特别推荐', '', '38', '0', '1', '1498654783', '1498654783');
INSERT INTO `category` VALUES ('43', '特产一览', '', '38', '0', '1', '1498654802', '1498654802');
INSERT INTO `category` VALUES ('44', '推荐合作单位', '', '38', '0', '1', '1498654829', '1498654829');
INSERT INTO `category` VALUES ('45', '资讯商机', '', '38', '0', '1', '1498654848', '1498654848');
INSERT INTO `category` VALUES ('46', '最新交易公告', '', '45', '0', '1', '1498654975', '1498654975');
INSERT INTO `category` VALUES ('47', '最新信息', '', '45', '0', '1', '1498655013', '1498655013');
INSERT INTO `category` VALUES ('48', '行业快讯', '', '45', '0', '1', '1498655037', '1498655037');
INSERT INTO `category` VALUES ('49', '农作物类', '', '39', '0', '1', '1498655142', '1498655142');
INSERT INTO `category` VALUES ('50', '农机械类', '', '39', '0', '1', '1498655159', '1498655159');
INSERT INTO `category` VALUES ('51', '养殖类', '', '39', '0', '1', '1498655174', '1498655174');
INSERT INTO `category` VALUES ('52', '蔬果类', '', '39', '0', '1', '1498655190', '1498655190');
INSERT INTO `category` VALUES ('53', '特产类', '', '39', '0', '1', '1498655211', '1498655211');
INSERT INTO `category` VALUES ('54', '其他', '', '39', '0', '1', '1498655221', '1498655221');
INSERT INTO `category` VALUES ('55', '小广告', '', '43', '0', '0', '1498715916', '1498715916');
INSERT INTO `category` VALUES ('56', '产品', '', '0', '0', '1', '1498748122', '1498748253');
INSERT INTO `category` VALUES ('57', '合作社介绍', '', '56', '0', '1', '1498748159', '1498748159');
INSERT INTO `category` VALUES ('58', '产品介绍', '', '56', '0', '1', '1498748174', '1498748174');
INSERT INTO `category` VALUES ('59', '技术支持', '', '56', '0', '1', '1498748187', '1498748187');
INSERT INTO `category` VALUES ('60', '行业前景', '', '56', '0', '1', '1498748205', '1498748205');
INSERT INTO `category` VALUES ('61', '致富故事', '', '56', '0', '1', '1498748222', '1498748222');
INSERT INTO `category` VALUES ('62', '生产基地', '', '56', '0', '1', '1498748239', '1498748239');

-- ----------------------------
-- Table structure for `city`
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL DEFAULT '',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`uname`),
  KEY `parent_id` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of city
-- ----------------------------
INSERT INTO `city` VALUES ('1', '北京', 'beijing1', '0', '0', '0', '1', '1474013959', '0');
INSERT INTO `city` VALUES ('2', '北京', 'beijing', '1', '0', '0', '1', '1474014007', '0');
INSERT INTO `city` VALUES ('4', '江西', 'jiangxi', '0', '0', '0', '1', '1474014162', '0');
INSERT INTO `city` VALUES ('5', '南昌', 'nanchang', '4', '1', '0', '1', '1474014181', '0');
INSERT INTO `city` VALUES ('6', '上饶', 'shangrao', '4', '0', '0', '1', '1474014193', '0');
INSERT INTO `city` VALUES ('7', '抚州', 'fuzhou', '4', '0', '0', '1', '1474014204', '0');
INSERT INTO `city` VALUES ('8', '景德镇', 'jdz', '4', '0', '0', '1', '1474014220', '0');
INSERT INTO `city` VALUES ('9', '九江', 'jiujiang', '4', '0', '0', '1', '0', '0');
INSERT INTO `city` VALUES ('10', '赣州', 'ganzhou', '4', '0', '0', '1', '0', '0');
INSERT INTO `city` VALUES ('11', '萍乡', 'pingxiang', '4', '0', '0', '1', '0', '0');
INSERT INTO `city` VALUES ('12', '宜春', 'yichun', '4', '0', '0', '1', '0', '0');
INSERT INTO `city` VALUES ('13', '吉安', 'jian', '4', '0', '0', '1', '0', '0');
INSERT INTO `city` VALUES ('14', '成都', 'chengdu', '0', '0', '0', '1', '0', '0');

-- ----------------------------
-- Table structure for `group`
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `se_category_id` int(11) NOT NULL DEFAULT '0',
  `bis_id` int(11) NOT NULL DEFAULT '0',
  `location_ids` varchar(100) NOT NULL DEFAULT '',
  `image` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `origin_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `current_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `city_id` int(11) NOT NULL DEFAULT '0',
  `buy_count` int(11) NOT NULL DEFAULT '0',
  `total_count` int(11) NOT NULL DEFAULT '0',
  `coupons_begin_time` int(11) NOT NULL DEFAULT '0',
  `coupons_end_time` int(11) NOT NULL DEFAULT '0',
  `xpoint` varchar(20) NOT NULL DEFAULT '',
  `ypoint` varchar(20) NOT NULL DEFAULT '',
  `bis_account_id` int(10) NOT NULL DEFAULT '0',
  `balance_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `notes` text NOT NULL,
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `se_category_id` (`se_category_id`),
  KEY `city_id` (`city_id`),
  KEY `start_time` (`start_time`),
  KEY `end_time` (`end_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of group
-- ----------------------------

-- ----------------------------
-- Table structure for `index_user`
-- ----------------------------
DROP TABLE IF EXISTS `index_user`;
CREATE TABLE `index_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repassword` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `card` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of index_user
-- ----------------------------
INSERT INTO `index_user` VALUES ('0', 'xiayin', 'xiayin', 'xiayin', '', '', '', '', '0', '0', '0');

-- ----------------------------
-- Table structure for `shops`
-- ----------------------------
DROP TABLE IF EXISTS `shops`;
CREATE TABLE `shops` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `city_id` int(11) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shops
-- ----------------------------
INSERT INTO `shops` VALUES ('1', 'ksd', '0', '0', '0', '0', '0', '0');
