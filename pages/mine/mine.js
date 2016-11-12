var app = getApp()
Page( {
  data: {
    userInfo: {},
    projectSource: 'https://github.com/liuxuanqiang/wechat-weapp-mall',
    userListInfo: [ {
      icon: '../../images/i1.png',
      text: '钱包',
      url:'../../pages/qian/qian',
      isunread: false,
      unreadNum: 2
    }, {
        icon: '../../images/i2.png',
        text: '服务地址',
        url:'../../pages/fuwu/fuwu',
        isunread: false,
        unreadNum: 2
      }, {
        icon: '../../images/i3.png',
        text: '意见反馈',
        url:'../../pages/fan/fan',
        isunread: false,
        unreadNum: 1
      }, {
        icon: '../../images/i4.png',
        text: '关于我们',
        url:'../../pages/about/about'
      }, {
        icon: '../../images/i5.png',
        text: '呼叫客服',
        url:'../../pages/kefu/kefu',
      }]
  },

  onLoad: function() {
    var that = this
    //调用应用实例的方法获取全局数据
    app.getUserInfo( function( userInfo ) {
      //更新数据
      that.setData( {
        userInfo: userInfo
      })
    })
  }
})