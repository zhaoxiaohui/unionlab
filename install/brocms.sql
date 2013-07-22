-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 07 月 22 日 12:49
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `brocms`
--

-- --------------------------------------------------------

--
-- 表的结构 `bro_album`
--

CREATE TABLE IF NOT EXISTS `bro_album` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `pid` smallint(5) unsigned NOT NULL default '0',
  `path` varchar(100) NOT NULL default '',
  `title` varchar(100) NOT NULL default '',
  `description` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `album_pid` (`pid`),
  KEY `album_path` (`path`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `bro_album`
--

INSERT INTO `bro_album` (`id`, `pid`, `path`, `title`, `description`) VALUES
(1, 0, '0', '风景如画', '春来江水绿如蓝');

-- --------------------------------------------------------

--
-- 表的结构 `bro_article`
--

CREATE TABLE IF NOT EXISTS `bro_article` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(50) NOT NULL default '',
  `summary` varchar(200) NOT NULL default '',
  `posttime` int(10) unsigned NOT NULL default '0',
  `uid` int(11) unsigned NOT NULL default '0',
  `comefrom` varchar(50) NOT NULL default '',
  `content` text NOT NULL,
  `keyword` varchar(20) NOT NULL default '',
  `pid` smallint(5) unsigned NOT NULL default '0',
  `audit` smallint(1) unsigned NOT NULL default '0',
  `recommend` smallint(1) unsigned NOT NULL default '0',
  `allow` smallint(1) unsigned NOT NULL default '1',
  `views` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `article_title` (`title`),
  KEY `article_uid` (`uid`),
  KEY `article_pid` (`pid`),
  KEY `article_audit` (`audit`),
  KEY `article_recommend` (`recommend`),
  KEY `article_allow` (`allow`),
  KEY `article_keyword` (`keyword`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `bro_article`
--

INSERT INTO `bro_article` (`id`, `title`, `summary`, `posttime`, `uid`, `comefrom`, `content`, `keyword`, `pid`, `audit`, `recommend`, `allow`, `views`) VALUES
(1, '智能感知与创新应用实验室', '本科研团队隶属于国家教育部可信分布式计算与服务重点实验室', 1374128097, 1, '自编', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	本科研团队隶属于国家教育部可信分布式计算与服务重点实验室，现有教师5名，负责人：赵方 副教授，成员：李朝晖 副教授、贾红娓博士、牛琨博士。今年在研科研项目有国家自然基金项目2项、北京市自然基金1项、江苏省科技支撑项目1项、广东产学研重点项目1项、科技部物联网重点项目2项、北京市经信委项目1项、横向课题4项。主要研究及开发方向：物联网全空间定位技术研究、物联网环境监测核心技术研究及开发、移动互联网远程虚拟监控系统开发、网络软件开发等。可以说科研经费比较充裕，科研任务饱满。另外一个方面就是工学硕士科研压力较大（2012年工学硕士是我第二年招生，实验室目前有工学硕士仅7名同学），个别学生身兼多个科研项目，学生科研技能提高较快。因此，欢迎能够承受科研压力、刻苦钻研、勇于攻关的新鲜血液加入。</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp; 另外一方面，我也希望为加入本科研团队的同学们创造温馨、和谐、良好沟通、积极、互助的团队文化。针对工学硕士，在科研补贴方面，除了学校规定的基础科研津贴外，本团队为参与科研项目、实验室工作（如参与著作写作、项目申请等）的同学提供额外科研津贴和项目奖励。本团队为学生提供定期（每周）体育活动津贴、学术沙龙活动（定期邀请IBM、中国移动研究院、百渡公司员工和学生交流；学生每周进行科研、技术心的交流）、节假日活动、外出活动提供经费等，希望这些活动继续为本科研团队的同学创造一个温馨的家，也希望每一个加入本团队的学生能够和同学们和谐相处、互相促进、和实验室一起成长。</p>\r\n', '实验室', 1, 1, 3, 0, 31),
(2, '下雨了', 'ss', 1374473953, 1, 'ss', '<p>\r\n	&nbsp;</p>\r\n<table style=&quot;max-width: 100%; background-color: rgb(250, 250, 252); border-collapse: collapse; border-spacing: 0px; color: rgb(51, 51, 51); font-family: &#039;Microsoft Yahei&#039;, &#039;冬青黑体简体中文 w3&#039;, 宋体; font-size: 16px; line-height: 26px; white-space: normal; &quot;>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span class=&quot;span-img&quot; style=&quot;float: none; min-height: 1px; margin: 5px auto 15px; text-align: center; display: block; overflow: hidden; &quot;><img alt=&quot;余额宝的蝴蝶效应&quot; src=&quot;http://u.img.huxiu.com/portal/201307/21/211439zr62zs771613262m.jpg&quot; style=&quot;height: auto; max-width: 628px; vertical-align: middle; border: 0px; &quot; /></span>\r\n				<div>\r\n					文/章飚\r\n					<div>\r\n						&nbsp;</div>\r\n					<div>\r\n						<div>\r\n							要不是6月中下旬银行&ldquo;钱荒&rdquo;事件闹得沸沸扬扬，阿里余额宝的推出本应掀起更大的波澜。自6月17日上线迄今，余额宝引发的口水之争几乎形成了一次全民的网络金融大普及，好多原本连货币型基金是啥意思都不懂的网民，在媒体、专业人士、知名网友的轮番讨论中，成为了余额宝的第一批客户。</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							截至7月13日，余额宝的资金规模就已突破百亿元，客户数或超400万户。这种态势还在以每天上亿元的速度持续。</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							<b><font color=&quot;#800000&quot;>有人警惕，有人认为不足为惧</font></b></div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							在对余额宝的争论中，银行业内部的声音呈现出两极分化的态势。以笔者所接触到的银行业人士来看，有的已经把分析余额宝特性、筹划对应措施提上议事日程；有的则在了解之后认为余额宝并不足惧，而且也和银行现在的主要业务交集不大。</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							在警惕余额宝的银行业人士中，观点大致可集中为以下几点：</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							1、以前支付宝里面的闲散资金不能获得收益，所以大部分都回流到原来的银行账户里了，现在不仅资金回流无望，还会吸收大量的银行活期存款转入余额宝，这个不能不防；</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							2、现在余额宝只有一款货币基金产品，但由于天弘基金此次的一炮走红，未来肯定会有更多的三方公司加入，这势必会对银行的代销业务造成冲击，直接影响银行的中间业务收入；</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							3、余额宝的方式极为灵活，业务开通方便，可以随时赎回用于消费支付或提现，在具备活期存款流动性强，使用方便的特性的同时，却又可以让客户获得较高的收益，这点完全做到了以客户为中心，银行目前很难有类似的产品相对应；</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							4、余额宝虽然在产品创新上并无特色，但支付宝强大的渠道优势、客户黏性和数据优势让银行不得不防。监管层面、政府层面对于支付宝这样的摸索与挑战，也表现出明显的支持、鼓励态度。</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							在认为余额宝不足为惧的银行业人士中，观点大致可归纳为以下几点：</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							1、余额宝这个产品并不是一个具有首创性质的产品，类似的产品早就有了，要是银行需要担心，早就有所行动了；</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							2、余额宝在宣传的时候夸大其词、混淆概念、没能正确提示风险，这种行为未免也太不负责了，不能保证不会出任何问题&mdash;&mdash;而一旦出了问题，客户肯定就会产生恐慌情绪，这个并不创新的&ldquo;新兴事物&rdquo;，恐怕也就寿终正寝了；</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							3、余额宝的资金来源大多来自支付宝体系内的沉淀资金，怎么可能与银行抢存款？即便有客户将自己银行卡上的现金转入余额宝，大都也是小额的。这些&ldquo;屌丝客户&rdquo;银行以前都头疼得要死：存款不多、交易频繁，银行很难在他们身上赚到什么钱，现在这些人把钱转去余额宝，就让他们转呗；</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							4、利用余额宝理财的说法并不符合专业理财角度的要求。从专业的角度看，如果你有5万、10万，无论是定存还是购买理财产品，银行那边的服务和收益只会更好，何必选择余额宝呢？笔者就听到一位银行业人士笑称：&ldquo;我要把10万块存到余额宝而不是放银行买理财，我老婆不抽我一顿才怪！&rdquo;</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							5、支付宝、余额宝的资金，最终也要托管在银行，也就是说在目前的机制下，怎么可能对银行购成实质性的威胁呢？</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							基本上，无论是警惕性的意见还是&ldquo;无忧论&rdquo;的观点，每一点都有各自的道理，谈不上谁对谁错。但<b>问题在于，这些观点大都还站在银行业自身的角度来看待余额宝这个事儿，在思考问题及对策的时候，难免带有那么些银行业自身的思维定势。</b>一个比较鲜明的态度是，每当笔者看到微博上对于余额宝这个话题的争论时，来自银行业人士的态度很大一部分可以概括为：所有夸大余额宝作用的人，都是不懂金融的。</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							而在笔者看来，<b>支付宝打的是一场非对称战争，</b>如果只能沉浸在自己的世界里，用沿用多年的思维惯性来看待余额宝这个新冒出来的挑战者的话，银行未必会得出正确的答案和应对策略。</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							马云<a href=&quot;http://www.huxiu.com/article/16223/1.html&quot; style=&quot;color: rgb(0, 136, 204); text-decoration: none; &quot; target=&quot;_blank&quot;>在外滩会议和《人民日报》上说</a>：&ldquo;未来的金融有两大机会，一个是金融互联网，金融行业走向互联网；第二个是互联网金融，纯粹的外行领导，其实很多行业的创新都是外行进来才引发的。金融行业也需要搅局者，更需要那些外行的人进来进行变革。&rdquo;这里的意思很明显：既然知道银行是难以撼动的，那我们也就没有必要在你们擅长、稳固的领域进行挑战。</div>\r\n						<div>\r\n							&nbsp;</div>\r\n						<div>\r\n							阿里巴巴永远都成不了阿里银行，因为它没必要这么做；支付宝永远都实现不了由三方支付平台、类金融工具向&ldquo;准银行账户&rdquo;的转型，但它也无需这么做。<b>借助余额宝，支付宝跨出&ldquo;类存款&rdquo;的第一步，未来走向&ldquo;类银行&rdquo;速度只会比银行想象的更快。</b></div>\r\n					</div>\r\n				</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'ss', 4, 1, 0, 1, 4),
(3, '1e', 'dd', 1374474111, 1, 'dd', '\r\n<!DOCTYPE HTML>\r\n<html lang=&quot;en&quot;>\r\n<head>\r\n    <meta charset=&quot;UTF-8&quot;>\r\n    <title>果壳网 科技有意思</title>\r\n    <meta name=&quot;Keywords&quot; content=&quot;果壳,果壳网,科技,泛科技,智趣,生活,科普&quot;/>\r\n    <meta name=&quot;Description&quot; content=&quot;&quot;/>\r\n    \r\n    \r\n    \r\n    <link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://static.guokr.com/skin/gui.css?v=65f2ddc51736&quot;>\r\n    \r\n    <link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://static.guokr.com/skin/footer.css?v=34c5ceddf02f&quot;>\r\n\r\n</head>\r\n<body>\r\n    <div class=&quot;container &quot;>\r\n        <div class=&quot;guokr&quot; id=&quot;guokr&quot;></div>\r\n        <div class=&quot;gheader-wp&quot;>\r\n            \r\n            <div class=&quot;gheader-wp-b&quot;>\r\n                <div class=&quot;gheader&quot; id=&quot;gheader&quot;>\r\n                    \r\n                    <a class=&quot;gheader-logo gfl&quot; id=&quot;guokrLogo&quot; href=&quot;http://www.guokr.com/&quot; title=&quot;果壳 科技有意思&quot;>果壳网</a>\r\n                    <form id=&quot;search&quot; class=&quot;gsearch&quot; action=&quot;http://www.guokr.com/search/all/&quot; method=&quot;get&quot; target=&quot;_blank&quot;>\r\n                        <p>\r\n                            <input id=&quot;searchTxt&quot; class=&quot;gsearch-txt&quot; type=&quot;text&quot; value=&quot;&quot; placeholder=&quot;&quot; maxlength=&quot;30&quot; name=&quot;wd&quot;>\r\n                            <input class=&quot;gsearch-bt gicon-search&quot; type=&quot;submit&quot; value=&quot;搜索&quot;>\r\n                        </p>\r\n                    </form>\r\n                    \r\n                    \r\n                    <ul class=&quot;gnav gfl&quot;>\r\n                        <li><a href=&quot;http://www.guokr.com/&quot;>首页</a></li>\r\n                        <li><a href=&quot;http://www.guokr.com/site/&quot;>主题站</a></li>\r\n                        \r\n                        <li><a href=&quot;http://www.guokr.com/group/hot_posts/&quot;>小组</a></li>\r\n                        \r\n                        <li><a href=&quot;http://www.guokr.com/ask/&quot;>问答</a></li>\r\n                        <li><a href=&quot;http://www.guokr.com/event/all/&quot;>活动</a></li>\r\n                    </ul>\r\n                    <div class=&quot;gheader-i gfr&quot;>\r\n                    \r\n                        \r\n                        <a href=&quot;https://account.guokr.com/sign_up/?success=https%3A%2F%2Faccount.guokr.com%2Foauth2%2Fauthorize%2F%3Fsuppress_prompt%3D1%26redirect_uri%3Dhttp%253A%252F%252Fwww.guokr.com%252Fcontact%252F%26response_type%3Dcookie%26client_id%3D32353&quot;>注册</a>\r\n                        <a class=&quot;gheader-i-sp&quot;>|\r\n                        </a><a href=&quot;https://account.guokr.com/oauth2/authorize/?suppress_prompt=1&amp;redirect_uri=http%3A%2F%2Fwww.guokr.com%2Fcontact%2F&amp;response_type=cookie&amp;client_id=32353&quot;>登录</a>\r\n                        \r\n                    \r\n                    </div>\r\n                    \r\n                </div>\r\n            </div>\r\n            \r\n        </div>\r\n\r\n        \r\n<div class=&quot;grow contact-us-page&quot;>\r\n    <div class=&quot;main gspan-21&quot;>\r\n        <h1 class=&quot;gbtitle&quot;>联系我们</h1>\r\n        <div class=&quot;main-content&quot;>\r\n            <h2>地址：</h2>\r\n            <p>北京市朝阳区郎家园6号院（郎园Vintage）3号楼4层（邮编：100022）</p>\r\n            <h2>客服支持：</h2>\r\n            <p>固定电话：010-85802928<br> \r\n            电子邮箱：<a href=&quot;mailto:service@guokr.com&quot;>service@guokr.com</a><br> \r\n            在班时间：周一至周五 早10:30~晚17:30</p>\r\n            <h2>商务合作：</h2>\r\n            <p>请联系&nbsp;赵大伟</p>\r\n            <p>固定电话：010-85805342&nbsp;转&nbsp;8034</p> \r\n            <p>电子邮箱：<a href=&quot;mailto:dawei.zhao@guokr.com&quot;>dawei.zhao@guokr.com</a></p>\r\n            <h2>市场合作：</h2>\r\n            <p>请联系&nbsp;俞淳子</p>\r\n            <p>固定电话：010-85805342&nbsp;转&nbsp;8020</p>\r\n            <p>电子邮箱：<a href=&quot;mailto:media@guokr.com&quot;>media@guokr.com </a></p>\r\n            <h2>总机：</h2>\r\n            <p>010-85805342<br>010-85805343</p>\r\n            <h2>传真：</h2>\r\n            <p>010-85805342-8008<br>010-85805343-8008</p>\r\n        </div>\r\n    </div>\r\n</div>\r\n\r\n\r\n        \r\n        <div class=&quot;gbottom&quot;>\r\n    <div class=&quot;gbottom-nav&quot;>\r\n        <a href=&quot;http://www.guokr.com/about/&quot;>关于我们</a>\r\n        <a href=&quot;http://www.guokr.com/i/0409470284/blogs/&quot;>加入果壳</a>\r\n        <a href=&quot;http://www.guokr.com/spread/&quot;>媒体报道</a>\r\n        <a href=&quot;http://www.guokr.com/question/446161/&quot;>帮助中心</a>\r\n        <a href=&quot;http://www.guokr.com/zone/&quot;>内容专区</a>\r\n        <a href=&quot;http://www.guokr.com/help/policy/&quot;>免责声明</a>\r\n        <a href=&quot;http://www.guokr.com/contact/&quot;>联系我们</a>\r\n        <a href=&quot;http://m.guokr.com/&quot;>移动版</a>\r\n        <a href=&quot;http://www.guokr.com/mobile/&quot;>移动应用</a>\r\n    </div>\r\n    <div class=&quot;gbottom-i&quot;>©2013果壳网&nbsp;京ICP备09043258号-2&nbsp;京公网安备1101052730</div>\r\n</div>\r\n        \r\n    </div>\r\n    \r\n   <script>\r\n       \r\n       var g_page_name = &#039;unkownPage&#039;,\r\n           GJS_VERSION = &#039;doom&#039;,\r\n           GJS_PRELOAD = [&#039;ga&#039;, &#039;jQuery&#039;, &#039;GUtils&#039;, &#039;api&#039;, &#039;share&#039;],\r\n           ukey = null,\r\n           \r\n           url_signin = &quot;https://account.guokr.com/oauth2/authorize/?suppress_prompt=1&redirect_uri=http%3A%2F%2Fwww.guokr.com%2Fcontact%2F&response_type=cookie&client_id=32353&display=iframe&quot;,\r\n           url_signup = &quot;https://account.guokr.com/sign_up/?success=https%3A%2F%2Faccount.guokr.com%2Foauth2%2Fauthorize%2F%3Fsuppress_prompt%3D1%26redirect_uri%3Dhttp%253A%252F%252Fwww.guokr.com%252Fcontact%252F%26response_type%3Dcookie%26client_id%3D32353%26display%3Diframe&quot;,\r\n           \r\n           weibo_signin = &quot;https://account.guokr.com/weibo/sign_in/?success=https%3A%2F%2Faccount.guokr.com%2Foauth2%2Fauthorize%2F%3Fsuppress_prompt%3D1%26redirect_uri%3Dhttp%253A%252F%252Fwww.guokr.com%252Fcontact%252F%26response_type%3Dcookie%26client_id%3D32353%26display%3Diframe&quot;,\r\n           renren_signin = &quot;https://account.guokr.com/renren/sign_in/?success=https%3A%2F%2Faccount.guokr.com%2Foauth2%2Fauthorize%2F%3Fsuppress_prompt%3D1%26redirect_uri%3Dhttp%253A%252F%252Fwww.guokr.com%252Fcontact%252F%26response_type%3Dcookie%26client_id%3D32353%26display%3Diframe&quot;,\r\n           qq_signin = &quot;https://account.guokr.com/qq/sign_in/?success=https%3A%2F%2Faccount.guokr.com%2Foauth2%2Fauthorize%2F%3Fsuppress_prompt%3D1%26redirect_uri%3Dhttp%253A%252F%252Fwww.guokr.com%252Fcontact%252F%26response_type%3Dcookie%26client_id%3D32353%26display%3Diframe&quot;;\r\n           douban_signin = &quot;https://account.guokr.com/douban/sign_in/?success=https%3A%2F%2Faccount.guokr.com%2Foauth2%2Fauthorize%2F%3Fsuppress_prompt%3D1%26redirect_uri%3Dhttp%253A%252F%252Fwww.guokr.com%252Fcontact%252F%26response_type%3Dcookie%26client_id%3D32353%26display%3Diframe&quot;;\r\n       \r\n   </script>\r\n   <script src=&quot;http://static.guokr.com/js/I.js?v=dc73ae7f4400&quot;></script>\r\n   <script src=&quot;http://static.guokr.com/js/main.js?v=913416346cc4&quot;></script>\r\n    \r\n</body>\r\n</html>', 'dd', 4, 1, 0, 1, 5);

-- --------------------------------------------------------

--
-- 表的结构 `bro_column`
--

CREATE TABLE IF NOT EXISTS `bro_column` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `pid` smallint(5) unsigned NOT NULL default '0',
  `path` varchar(100) NOT NULL default '',
  `title` varchar(100) NOT NULL default '',
  `description` varchar(200) NOT NULL default '',
  `picid` smallint(5) unsigned NOT NULL default '0',
  `audit` smallint(1) unsigned NOT NULL default '1',
  `ord` smallint(3) unsigned NOT NULL default '0',
  `display` smallint(3) unsigned NOT NULL default '1',
  PRIMARY KEY  (`id`),
  KEY `column_pid` (`pid`),
  KEY `column_path` (`path`),
  KEY `column_audit` (`audit`),
  KEY `column_ord` (`ord`),
  KEY `column_display` (`display`),
  KEY `column_picid` (`picid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 导出表中的数据 `bro_column`
--

INSERT INTO `bro_column` (`id`, `pid`, `path`, `title`, `description`, `picid`, `audit`, `ord`, `display`) VALUES
(1, 0, '0', '实验室概况', '整体介绍实验室', 8, 1, 0, 1),
(2, 0, '0', '团队巡礼', '309之家', 5, 0, 0, 1),
(3, 0, '0', '科研成果', '纵向横向起头并进', 1, 0, 0, 1),
(4, 0, '0', '创新文化', '创新是动力', 3, 0, 0, 1),
(6, 0, '0', '学生天地', '欢乐一家人', 4, 0, 0, 1),
(7, 0, '0', '硕士招生', '欢迎报考！', 8, 0, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `bro_comment`
--

CREATE TABLE IF NOT EXISTS `bro_comment` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `uid` int(11) unsigned NOT NULL default '0',
  `aid` int(11) unsigned NOT NULL default '0',
  `ptime` int(10) unsigned NOT NULL default '0',
  `content` text NOT NULL,
  `cmt` smallint(5) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `comment_uid` (`uid`),
  KEY `comment_aid` (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `bro_comment`
--


-- --------------------------------------------------------

--
-- 表的结构 `bro_dynamic`
--

CREATE TABLE IF NOT EXISTS `bro_dynamic` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `uid` int(11) unsigned NOT NULL default '0',
  `otype` smallint(1) unsigned NOT NULL default '0',
  `ptime` int(11) unsigned NOT NULL default '0',
  `pid` int(11) unsigned NOT NULL default '0',
  `cid` int(11) unsigned NOT NULL default '0',
  `title` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `dynamic_uid` (`uid`),
  KEY `dynamic_otype` (`otype`),
  KEY `dynamic_pid` (`pid`),
  KEY `dynamic_cid` (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 导出表中的数据 `bro_dynamic`
--

INSERT INTO `bro_dynamic` (`id`, `uid`, `otype`, `ptime`, `pid`, `cid`, `title`) VALUES
(1, 1, 1, 1374128097, 0, 1, '智能感知与创新应用实验室'),
(2, 1, 4, 1374128231, 0, 1, '智能感知与创新应用实验室'),
(3, 1, 3, 1374128233, 0, 1, '智能感知与创新应用实验室'),
(4, 1, 1, 1374473953, 0, 2, '下雨了'),
(5, 1, 1, 1374474111, 0, 3, '1e'),
(6, 2, 4, 1374477461, 0, 1, '智能感知与创新应用实验室'),
(7, 2, 3, 1374477461, 0, 1, '智能感知与创新应用实验室'),
(8, 3, 5, 1374477881, 0, 1, 'ss'),
(9, 5, 5, 1374477938, 0, 1, 'ss');

-- --------------------------------------------------------

--
-- 表的结构 `bro_flink`
--

CREATE TABLE IF NOT EXISTS `bro_flink` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `webname` varchar(30) NOT NULL default '',
  `url` varchar(60) NOT NULL default '',
  `logo` varchar(60) NOT NULL default '',
  `rname` varchar(30) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `dtime` int(10) unsigned NOT NULL default '0',
  `msg` varchar(200) NOT NULL default '',
  `list` smallint(1) unsigned NOT NULL default '0',
  `audit` smallint(1) unsigned NOT NULL default '0',
  `ord` smallint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `flink_list` (`list`),
  KEY `flink_audit` (`audit`),
  KEY `flink_ord` (`ord`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `bro_flink`
--


-- --------------------------------------------------------

--
-- 表的结构 `bro_group`
--

CREATE TABLE IF NOT EXISTS `bro_group` (
  `id` smallint(4) unsigned NOT NULL auto_increment,
  `groupname` varchar(20) NOT NULL default '',
  `description` varchar(200) NOT NULL default '',
  `useradmin` tinyint(1) NOT NULL default '0',
  `webadmin` tinyint(1) NOT NULL default '0',
  `articleadmin` tinyint(1) NOT NULL default '0',
  `sendarticle` tinyint(1) NOT NULL default '0',
  `sendcomment` tinyint(1) NOT NULL default '0',
  `sendmessage` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `bro_group`
--

INSERT INTO `bro_group` (`id`, `groupname`, `description`, `useradmin`, `webadmin`, `articleadmin`, `sendarticle`, `sendcomment`, `sendmessage`) VALUES
(1, '超级管理员', '超级管理员', 1, 1, 1, 1, 1, 1),
(2, '普通用户', '普通用户', 0, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `bro_image`
--

CREATE TABLE IF NOT EXISTS `bro_image` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `pid` smallint(4) unsigned NOT NULL default '0',
  `name` char(24) NOT NULL default '',
  `water` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `image_pid` (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 导出表中的数据 `bro_image`
--

INSERT INTO `bro_image` (`id`, `pid`, `name`, `water`) VALUES
(1, 1, '20130716100520_644.jpg', 0),
(2, 1, '20130716100520_904.jpg', 0),
(3, 1, '20130716100520_289.jpg', 0),
(4, 1, '20130716100520_520.jpg', 0),
(5, 1, '20130716100520_706.jpg', 0),
(6, 1, '20130716100520_727.jpg', 0),
(7, 1, '20130716100520_877.jpg', 0),
(8, 1, '20130716100520_578.jpg', 0);

-- --------------------------------------------------------

--
-- 表的结构 `bro_message`
--

CREATE TABLE IF NOT EXISTS `bro_message` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(80) NOT NULL default '',
  `uid` int(11) unsigned NOT NULL default '0',
  `revicename` varchar(30) NOT NULL default '',
  `ptime` int(10) unsigned NOT NULL default '0',
  `content` text NOT NULL,
  `stutas` smallint(6) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `message_uid` (`uid`),
  KEY `message_revicename` (`revicename`),
  KEY `message_stutas` (`stutas`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `bro_message`
--

INSERT INTO `bro_message` (`id`, `title`, `uid`, `revicename`, `ptime`, `content`, `stutas`) VALUES
(1, 'nihao', 2, 'ss', 1374477508, 'nihao', 0),
(2, '回复：nihao', 1, 'brocms', 1374477562, '你也好', 0);

-- --------------------------------------------------------

--
-- 表的结构 `bro_notice`
--

CREATE TABLE IF NOT EXISTS `bro_notice` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `title` varchar(80) NOT NULL default '',
  `color` char(6) NOT NULL default '000000',
  `starttime` int(10) unsigned NOT NULL default '0',
  `endtime` int(10) unsigned NOT NULL default '0',
  `content` text NOT NULL,
  `display` smallint(1) unsigned NOT NULL default '1',
  `ord` smallint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `notice_starttime` (`starttime`),
  KEY `notice_endtime` (`endtime`),
  KEY `notice_display` (`display`),
  KEY `notice_ord` (`ord`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `bro_notice`
--

INSERT INTO `bro_notice` (`id`, `title`, `color`, `starttime`, `endtime`, `content`, `display`, `ord`) VALUES
(1, '北邮-易鼎天成实验室成立', 'D43D17', 1374127590, 0, '<p>\r\n	2013年6月，新成立校企科研型联合实验室：北邮-易鼎天成联合实验室。实验室初期将在移动互联、物联网以及智慧城市等领域开展研究工作</p>\r\n<p>\r\n	<img alt=&quot;&quot; src=&quot;/brocms/public/uploads/notice_1/20130718140834_656.jpg&quot; style=&quot;width: 345px; height: 500px; &quot; /></p>\r\n', 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `bro_play`
--

CREATE TABLE IF NOT EXISTS `bro_play` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `aid` int(11) unsigned NOT NULL default '0',
  `title` varchar(80) NOT NULL default '',
  `picid` smallint(5) unsigned NOT NULL default '0',
  `starttime` int(10) unsigned NOT NULL default '0',
  `endtime` int(10) unsigned NOT NULL default '0',
  `display` smallint(1) unsigned NOT NULL default '1',
  `ord` smallint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `play_aid` (`aid`),
  KEY `play_picid` (`picid`),
  KEY `play_starttime` (`starttime`),
  KEY `play_endtime` (`endtime`),
  KEY `play_ord` (`ord`),
  KEY `play_display` (`display`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 导出表中的数据 `bro_play`
--

INSERT INTO `bro_play` (`id`, `aid`, `title`, `picid`, `starttime`, `endtime`, `display`, `ord`) VALUES
(2, 1, '我颠倒了整个世界，只为摆正你的倒影……', 8, 1373940548, 0, 1, 0),
(3, 0, '我爱你，没有什么目的。只是爱你', 7, 1373940854, 0, 1, 0),
(4, 0, '什么叫快乐?就是掩饰自己的悲伤对每个人微笑。', 6, 1373940882, 0, 1, 0),
(5, 0, '谁与我醉明月，愁在夕阳中。', 5, 1373940899, 0, 1, 0),
(6, 0, '在这世间，有些路是非要一个人去面对，单独一个人去跋涉的。', 4, 1373941008, 0, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `bro_projects`
--

CREATE TABLE IF NOT EXISTS `bro_projects` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `proName` varchar(50) NOT NULL default '',
  `proSum` varchar(200) NOT NULL default '',
  `proTeam` varchar(100) NOT NULL default '',
  `proKeyword` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `bro_projects`
--

INSERT INTO `bro_projects` (`id`, `proName`, `proSum`, `proTeam`, `proKeyword`) VALUES
(1, '微乐汇', '微乐汇', 'ss', '微博');

-- --------------------------------------------------------

--
-- 表的结构 `bro_user`
--

CREATE TABLE IF NOT EXISTS `bro_user` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `gid` smallint(4) unsigned NOT NULL,
  `username` varchar(20) NOT NULL default '',
  `userpwd` varchar(40) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `regtime` int(10) unsigned NOT NULL default '0',
  `sex` smallint(3) NOT NULL default '0',
  `info` varchar(120) NOT NULL default '',
  `upic` char(24) NOT NULL default '',
  `disable` smallint(3) unsigned NOT NULL default '0',
  `views` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `user_gid` (`gid`),
  KEY `user_username` (`username`),
  KEY `user_userpwd` (`userpwd`),
  KEY `user_disable` (`disable`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 导出表中的数据 `bro_user`
--

INSERT INTO `bro_user` (`id`, `gid`, `username`, `userpwd`, `email`, `regtime`, `sex`, `info`, `upic`, `disable`, `views`) VALUES
(1, 1, 'ss', '3691308f2a4c2f6983f2880d32e29c84', '854535609@qq.com', 1373939791, 0, '', '', 0, 10),
(2, 1, 'brocms', 'fc19ff201af9b302309762271104193b', '854535609@qq.com', 0, 1, '', '20130722152112_345.jpg', 0, 1),
(3, 1, 'brocms1', '2a5c1279ba33b2d1e93afdb99ba2ae34', '854535609@qq.com', 0, 1, '', '', 0, 1),
(4, 1, 'brocms2', 'a149b3601dab46f842c35c63b2ebf4d0', '854535609@qq.com', 0, 1, '', '', 0, 0),
(5, 2, 'brocms3', '91e9de37d22651629d7657ced72e8291', '854535609@qq.com', 0, 1, '', '', 0, 1);
