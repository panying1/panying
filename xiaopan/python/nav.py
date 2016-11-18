#!E:\python\python.exe
# _*_ coding:utf-8 _*_
print "Content-type:text/html"
print
# import urllib
import urllib2
import re
from db import *

class Nav:

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

    #获取导航
    def getNavCode(self):
        page = self.getPage()
        pattern = re.compile('(<div id="menu".*?)<i class="slogan"></i>', re.S)
        navCode = re.search(pattern, page)
        return navCode.group(1)
        
    #获取导航地址和名字
    def getNav(self):
        navCode = self.getNavCode()
        pattern = re.compile('<a href=("http://.*?/).*?>(.*?)</a>', re.S)
        itmes = re.findall(pattern, navCode)
        return itmes
        # for item in itmes:
        #     print item[0].lstrip('""'),self.tranTags(item[1])

db=DB()
nav = Nav()
nav1=nav.getNav()
for item in nav1:
    print item[0].lstrip('""'),nav.tranTags(item[1])
    name = nav.tranTags(item[1])
    sql = """INSERT INTO nav (name,url) VALUES(%s, %s )""" % ("'"+name+"'","'"+item[0].lstrip('""')+"'")
    res=db.my_add(sql)
    # print res