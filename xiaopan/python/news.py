#!E:\python\python.exe
# _*_ coding:utf-8 _*_

print "Content-type:text/html"
print
# import urllib
import urllib2
import re
from db import *

class News:

    #init
    def __init__(self):
        self.url = "http://news.baidu.com/"
        # self.url = "http://localhost/python/2/1.html"

    #把div用空格表示
    def tranTags(self, x):
        pattern = re.compile('<div.*?</div>')
        res = re.sub(pattern, '', x)
        return res

    #获取整个页面
    def getPage(self):
        url = self.url
        request = urllib2.Request(url)
        response = urllib2.urlopen(request)
        return response.read()

    #获取新闻
    def getNewsCode(self):
        page = self.getPage()
        pattern = re.compile('(<div id="pane-news".*?)<div class="column clearfix" id="tupianxinwen">', re.S)
        navCode = re.search(pattern, page)
        return navCode.group(1)
        
    #获取新闻地址和标题
    def getNews(self):
        navCode = self.getNewsCode()
        pattern = re.compile('<span class="dot"></span>.*?<a href="(.*?)".*?>(.*?)</a>', re.S)
        itmes = re.findall(pattern, navCode)
        return itmes
        # for item in itmes:
        #     print item[0].lstrip('""'), self.tranTags(item[1])
      #获取新闻地址和标题
    def getNews1(self):
        navCode = self.getNewsCode()
        pattern = re.compile('<i class="dot"></i>.*?<a href="(.*?)".*?>(.*?)</a>', re.S)
        itmes = re.findall(pattern, navCode)
        return itmes  

    def getNews2(self):
        navCode = self.getNewsCode()
        pattern = re.compile('<ul class="ulist focuslistnews" >.*?<a href="(.*?)".*?>(.*?)</a>', re.S)
        itmes = re.findall(pattern, navCode)
        return itmes  


news = News()
new=news.getNews()
new1=news.getNews1()
new2=news.getNews2()

db=DB()
for item in new1:
    print item[0],news.tranTags(item[1])
    print '<br>'
    title = news.tranTags(item[1])
    sql = """INSERT INTO news (title,url) VALUES(%s, %s )""" % ("'"+title+"'","'"+item[0].lstrip('""')+"'")
    res=db.my_add(sql)

for item in new:
    print item[0],news.tranTags(item[1])
    print '<br>'
    title = news.tranTags(item[1])
    sql = """INSERT INTO news (title,url) VALUES(%s, %s )""" % ("'"+title+"'","'"+item[0].lstrip('""')+"'")
    res=db.my_add(sql)

for item in new2:
    print item[0],news.tranTags(item[1])
    print '<br>'
    title = news.tranTags(item[1])
    sql = """INSERT INTO news (title,url) VALUES(%s, %s )""" % ("'"+title+"'","'"+item[0].lstrip('""')+"'")
    res=db.my_add(sql)


    # print res