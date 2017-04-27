	$(function() {
		$('#add_new_song').click(function() {
			$('.showhide_form').slideToggle(1000);
		});

		

		$('.settings_img').click(function() {
			$('.block_settings').toggle();
		});

		$('.link').click(function() {
			$('.answer_form').toggle();
		});


		$('.visibility').bind('change', function() {
		data = $(this).val();
		if(data == 'group') {
		$.ajax({
			'url'    : 'ajax/group/',
			'data'   : 'group',
			'type'   : 'GET',
			'success': function(data) {
				$('.select_group').html(data);
			}
		});
		}
		else{
			$('.select_group').html('');
		}
	});

		$('.music_sort').bind('change', function() {
		exec = $(this).val();
		if(exec!=null) {
		$.ajax({
			'url'    : 'ajax/music/',
			'data'   : 'exec',
			'type'   : 'GET',
			'success': function(exec) {
				$('.selected_songs').html(exec);
			}
		});
		}
		else{
			$('.selected_songs').html('');
		}

	});




	});

