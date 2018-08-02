<div class="nd-alerts">
    <div class="wrap">
        <p>
			<?= $this->title ? '<strong>' . esc_html( $this->title ) . '</strong>' : ''; ?>
			<?= $this->title && $this->text ? ' – ' : ''; ?>
			<?= $this->text ? wp_kses_post( $this->text ) : ''; ?>
        </p>
        <button class="nd-alerts__close"><img
                    src="<?php echo CHILD_THEME_URI; ?>/assets/images/icons/close_white.min.svg"
                    alt="Close Alert"></button>
    </div>
</div>
