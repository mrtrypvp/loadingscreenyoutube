		var iFilesNeeded = 0;
		var iFilesTotal = 0;
		var bDownloadingFile = false;
		
		var iDifference = 0;
		var iPercentage = 0;

		function SetFilesNeeded( needed, total )
		{
			iFilesNeeded = needed;			
			RefreshFileBox();
		}
		
		function SetFilesTotal( total )
		{
			iFilesTotal = total;
			RefreshFileBox();
		}
		
		function DownloadingFile( filename )
		{
			if ( bDownloadingFile )
			{
				iFilesNeeded = iFilesNeeded - 1;
				RefreshFileBox();
			}
			document.getElementById( "connecting" ).innerHTML = "<p>" + filename + "</p>";
			bCanChangeStatus = false;
			setTimeout( "bCanChangeStatus = true;", 1000 );
			bDownloadingFile = true;
			RefreshFileBox();
		}
		
		function SetStatusChanged( status )
		{
			if ( bDownloadingFile )
			{
				iFilesNeeded = iFilesNeeded - 1;
				bDownloadingFile = false;
				RefreshFileBox();
			}
			document.getElementById( "connecting" ).innerHTML = "<p>" + status + "</p>";
			bCanChangeStatus = false;
			setTimeout( "bCanChangeStatus = true;", 1000 );
			RefreshFileBox();
		}
		
		function RefreshFileBox()
		{
			iDifference = Math.round(iFilesTotal - iFilesNeeded);
			iPercentage = Math.round(iDifference / iFilesTotal * 100);
				
			document.getElementById( "percentage" ).innerHTML = "<p>" + iPercentage + "%</p>";
			document.getElementById( "loader" ).innerHTML = "<div id='loaderwidth' style='width:" + iPercentage + "%;'></div>";
			

			if ( iFilesTotal > 0 )
				document.getElementById( "percentage" ).style.visibility = 'visible';
			else
				document.getElementById( "percentage" ).style.visibility = 'hidden';
		}
		RefreshFileBox();

		function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {
			document.getElementById( "servername" ).innerHTML = servername;
			document.getElementById( "gamemode" ).innerHTML = mapname;
			document.getElementById( "mapname" ).innerHTML = gamemode;
			document.getElementById( "maxplayers" ).innerHTML = maxplayers;
		}
		