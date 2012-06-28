#= require 'fancybox/jquery.mousewheel-3.0.2.pack'
#= require 'fancybox/jquery.fancybox-1.3.1'
#= require 'jCarouselLite'
#= require 'jquery.easing.1.1'
#= require 'jquery-ui-1.8.2.datepicker/jquery-ui-1.8.2.custom.min'
#= require 'jquery.tools.min'
#= require 'jquery.uniform/jquery.uniform.min'
#= require 'jquery.cookie'
#= require 'main'

loadFlickr = (data) ->
  console.log data

$ ->
  if galleryImageHtml = $('#gallery-image-html')
    $.getJSON 'http://api.flickr.com/services/feeds/photos_public.gne?user_id=80229400@N07&format=json&callback=loadFlickr', (data) ->
      console.log 'effed'
