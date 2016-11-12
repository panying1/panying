const product = require('../../utils/product.js')

Page({
  data: {
    items: [],
    navs: [{icon: "../../images/icon1.png",       name: "家电维修"},
           {icon: "../../images/icon2.png", name: "家电清洗"},
           {icon: "../../images/icon3.png",  name: "卫生清理"},
           {icon: "../../images/icon8.png",     name: "阿姨/月嫂"}],
    navs1: [{icon: "../../images/icon4.png",       name: "开锁/换锁"},
           {icon: "../../images/icon5.png", name: "疏通"},
           {icon: "../../images/icon6.png",  name: "水电安装"},
           {icon: "../../images/icon7.png",     name: "更多"}],
    reg: [{url:"../reg/reg",reg: "../../images/reg.png"}],
    jia: [{name:"加盟我们",name2:"共创大业、共享双赢"},{name1:"意见反馈",name3:"让我们变得更好"}],
    popularity_products: [],
    new_products: [],
    hot_products: [],
    promotions: []
  },

  bindShowProduct: function (e) {
    wx.navigateTo({
      url: `../show_product/show_product?id=${e.currentTarget.dataset.id}`
    })
  },

  catchTapCategory: function (e) {
    wx.navigateTo({
      url: `../about/about?type=${e.currentTarget.dataset.type}`
    })
  },
  catchTapCategory1: function (e) {
    wx.navigateTo({
      url: `../fan/fan?type=${e.currentTarget.dataset.type}`
    })
  },
    catchTapCategory2: function (e) {
    wx.navigateTo({
      url: `../category/category?type=${e.currentTarget.dataset.type}`
    })
  },
  onLoad: function() {
        var than=this
          wx.request({
        url: 'http://www.caozaifei.top/sizu/weixin/index.php/home/index/xiaochengxu', //仅为示例，并非真实的接口地址

        header: {
            'Content-Type': 'application/json'
        },
        success: function(res) {
          console.log(res.data)
          than.setData({'lunbo':[res.data]})
        }
      })

      var than1=this
          wx.request({
        url: 'http://www.caozaifei.top/sizu/weixin/index.php/home/index/nav', //仅为示例，并非真实的接口地址

        header: {
            'Content-Type': 'application/json'
        },
        success: function(res) {
          console.log(res.data)
          than1.setData({'first':[res.data]})
        }
      })
  }
})
