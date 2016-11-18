#!E:\python\python.exe
# _*_ coding:utf-8 _*_

print "Content-type:text/html"
print
import re
import urllib2

request = urllib2.Request('http://news.baidu.com')
request.add_header('User-Agent','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0') 
opener =urllib2.build_opener()
content = opener.open(request).read()
# print content
# 新闻右边
pattern = re.compile('(<div class="l-right-col" alog-group="focus-top-right".*?<div class="imgnav" id="imgNav".*?<a class.*?)<div class="mod-localnews column clearfix" id="local_news"', re.S)
news = re.search(pattern, content)
print news.group(1)
for news in items:
    print news[0], news[1], '\n'