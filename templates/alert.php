<div class="nd-alerts__alert">
    <div class="wrap">
        <p>
			<?= $this->title ? '<strong>' . esc_html( $this->title ) . '</strong>' : ''; ?>
			<?= $this->title && $this->text ? ' – ' : ''; ?>
			<?= $this->text ? wp_kses_post( $this->text ) : ''; ?>
        </p>
        <a href="#" class="close_alert"><img
                    src="<?php echo CHILD_THEME_URI; ?>/assets/images/icons/close_white.min.svg"
                    alt="Close Alert"></a>
    </div>
</div>
