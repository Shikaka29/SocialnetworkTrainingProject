<?php defined('SYSPATH') or die('No direct script access.');?>

<div class="container2" style="margin-top: 20px;">
	<div id="container">
		<div id="content">
			<div>
				<div>
					<h1 style="text-align:center"><?php echo __('Друзья') ?></h1>
				</div>
			</div>

			<div>
				<div>
					<table class="table">
						<thead>
						<tr>
							<th><?php echo __('Имя') ?></th>
							<th><?php echo __('Email') ?></th>
							<th><?php echo __('Был в сети') ?></th>
							<th><?php echo __('Написать') ?></th>
						</tr>
						</thead>

						<tbody>
						<?php if ($friends) : ?>
							<?php foreach ($friends as $friend) : ?>
								<tr>

									<td>
										<a href="<?php echo URL::site('allusers/profile/'.$friend['id']) ?> "><?= $friend['username'] ?></a>
									</td>
									<td><?php echo $friend['email'] ?></td>
									<td><?php echo date('Y-m-d H:i:s', $friend['last_login']) ?></td>
									<td>
										<a href="<?= URL::site('messages/history/'.$friend['id']); ?>"><?= __('Написать сообщение') ?></a>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php else: ?>
							<tr>
								<td colspan="6"><?php echo __('No friends') ?></td>
							</tr>
						<?php endif; ?>
						</tbody>

						<tfoot>

						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>