#= require 'fancybox/jquery.mousewheel-3.0.2.pack'
#= require 'fancybox/jquery.fancybox-1.3.1'
#= require 'jCarouselLite'
#= require 'jquery.easing.1.1'
#= require 'jquery-ui-1.8.2.datepicker/jquery-ui-1.8.2.custom.min'
#= require 'jquery.tools.min'
#= require 'jquery.uniform/jquery.uniform.min'
#= require 'jquery.cookie'
#= require 'main'

$ ->
  if $('#gallery-images')
    galleryImageHtml = $('#gallery-image-html').html()

    $.getJSON 'http://api.flickr.com/services/feeds/photos_public.gne?id=80229400@N07&jsoncallback=?',
      tagmode: 'any'
      format: 'json'
    , (data) ->
      $.each data.items, (i, item) ->
        imgThumb = item.media.m.split('m.jpg')[0] + 'm.jpg'
        imgLarge = item.media.m.split('m.jpg')[0] + 'c.jpg'

        $galleryItem = $(galleryImageHtml)
        $galleryItem.find('div.excerpt p').html(item.title)
        # $galleryItem.find('h3.title a').html(item.title).attr('href', item.link)
        $galleryItem.find('p.image a').attr('href', imgLarge).fancybox()
        $galleryItem.find('img').attr('src', imgThumb).attr('alt', item.title).attr('title', item.title)
        if i % 4 == 0
          $galleryItem.addClass 'clearfix'
          if i >= 4
            $('<li class="c-12 dashed clearfix"></li>').appendTo '#gallery-images'
        $galleryItem.appendTo '#gallery-images'

