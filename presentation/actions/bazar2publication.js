$(document).ready(function(){
  $(document).on('click', 'button.bazar2publication-action', function(event) {
    const params = new URLSearchParams(document.location.search)
    const $button = $(this)

    // rename 'facette' as 'query'
    if (params.has('facette')) {
      params.set('query', params.get('facette'))
      params.delete('facette')
    }

    // provide base publication-template
    if ($button.attr('data-publication-template')) {
      params.set('publication-template', $button.attr('data-publication-template'))
    }

    // suffix first parameter with '/pdf' route
    const {value: page} = params.keys().next()
    const newPageAction = `${page}/pdf`

    const entries = Array.from(params.entries()).map(([key, value]) => {
      return (key === page) ? [newPageAction, value] : [key, value]
    })

    const redirectUrl = decodeURIComponent(new URLSearchParams(entries).toString())
      .replace(newPageAction + '=', newPageAction)

    window.location.search = redirectUrl
  })
});