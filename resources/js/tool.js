Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'look-route',
      path: '/look-route',
      component: require('./components/Tool').default,
    },
  ])
})
