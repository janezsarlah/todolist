<<<<<<< HEAD
$(document).ready(function() {
	$('ul').delegate('li .fa', 'click', function() {
		var id = $(this).siblings('.id').text();
		$(this).closest("li").slideUp();
		$.ajax({	
		   	type: 'post',
		   	url: 'marked.php',
            dataType: 'json',
            data: {as : 'visible', item : id},
            context: this,
            success: function(data) {
            	
            }
		});
	});

	$('ul').delegate('li .done-button', 'click', function() {
		var id = $(this).siblings('.id').text();
		var html = '<li><span class="item done">' + $(this).siblings('.item').text() + '</span><div class="fa fa-close"></div><div class="id">' + $(this).siblings('.id').text() + '</div></li>';
        $(this).closest("li").replaceWith(html);
		$.ajax({
		   	type: 'post',
		   	url: 'marked.php',
            dataType: 'json',
            data: {as : 'done', item : id},
            context: this,
            success: function(data) { }
		});
	});

	$('.submit').on('click', function() {
		var name = $('.input').val();
		if(name) {
			var html = '<li class="slide"><span class="item">' + name + '</span><div class="done-button">Done</div></li>';
			$('ul').append(html);
			$('ul li:last-child').slideDown();
			$('.input').val('');
			$.ajax({
				type: 'post',
				url: 'add.php',
				dataType: 'json',
				data: {name : name},
				success: function(data) {
					$('ul li:last-child').append('<div class="id">' + data['id'] + '</div>');
				}
			});
		}
	});

	$('.input').on('keypress', function(e) {
		if (e.keyCode == 13) {
			e.preventDefault();
		   	var name = $('.input').val();
			if(name) {
				var html = '<li class="slide"><span class="item">' + name + '</span><div class="done-button">Done</div></li>';
				$('ul').append(html);
				$('ul li:last-child').slideDown();
				$('.input').val('');
				$.ajax({
					type: 'post',
					url: 'add.php',
					dataType: 'json',
					data: {name : name},
					success: function(data) {
						$('ul li:last-child').append('<div class="id">' + data['id'] + '</div>');
					}
				});
			}
		}
	});
});

=======
$(document).ready(function() {
	$('ul').delegate('li .fa', 'click', function() {
		var id = $(this).siblings('.id').text();
		$(this).closest("li").slideUp();
		$.ajax({	
		   	type: 'post',
		   	url: 'marked.php',
            dataType: 'json',
            data: {as : 'visible', item : id},
            context: this,
            success: function(data) {
            	
            }
		});
	});

	$('ul').delegate('li .done-button', 'click', function() {
		var id = $(this).siblings('.id').text();
		var html = '<li><span class="item done">' + $(this).siblings('.item').text() + '</span><div class="fa fa-close"></div><div class="id">' + $(this).siblings('.id').text() + '</div></li>';
        $(this).closest("li").replaceWith(html);
		$.ajax({
		   	type: 'post',
		   	url: 'marked.php',
            dataType: 'json',
            data: {as : 'done', item : id},
            context: this,
            success: function(data) { }
		});
	});

	$('.submit').on('click', function() {
		var name = $('.input').val();
		if(name) {
			var html = '<li class="slide"><span class="item">' + name + '</span><div class="done-button">Done</div></li>';
			$('ul').append(html);
			$('ul li:last-child').slideDown();
			$('.input').val('');
			$.ajax({
				type: 'post',
				url: 'add.php',
				dataType: 'json',
				data: {name : name},
				success: function(data) {
					$('ul li:last-child').append('<div class="id">' + data['id'] + '</div>');
				}
			});
		}
	});

	$('.input').on('keypress', function(e) {
		if (e.keyCode == 13) {
			e.preventDefault();
		   	var name = $('.input').val();
			if(name) {
				var html = '<li class="slide"><span class="item">' + name + '</span><div class="done-button">Done</div></li>';
				$('ul').append(html);
				$('ul li:last-child').slideDown();
				$('.input').val('');
				$.ajax({
					type: 'post',
					url: 'add.php',
					dataType: 'json',
					data: {name : name},
					success: function(data) {
						$('ul li:last-child').append('<div class="id">' + data['id'] + '</div>');
					}
				});
			}
		}
	});
});

>>>>>>> 4ac698664c7c3e11e883ecb078c93e9011ea240a
