<div class="centrePage"><BR><BR><BR>
<FORM action = 'index.php?vue=langue&action=enregistrer' method = 'post'>
	<TABLE>
		<TR>
			<TD>
				Libelle de la langue
			</TD>
			<TD colspan = '2' align=left>
				<INPUT type = 'text' name = ''/>
			</TD>
		</TR>
		<TR>
			<TD>
				photo
			</TD>
			<TD>
				<INPUT type = 'text' name = ''/>
			</TD>
			<TD><I>
				donner le nom avec extension
			</I></TD>
		</TR>
		<TR>
			<TD >
				La langue 
			</TD>
			<TD colspan = '2' align=left>
				<?php
				echo $_SESSION['lesLangues'];
				?>
			</TD>
		</TR>
		<TR>
			<TD colspan = '3' align = 'right'>
				<INPUT type = 'submit' value = 'Valider' name = 'choix'/>
			</TD>
		<TR>
	</TABLE>
</FORM>
</div>
		