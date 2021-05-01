<?php

namespace PHPSTORM_META {

	// Allow PhpStorm IDE to resolve return types when calling tribe( Object_Type::class ) or tribe( `Object_Type` )
	override(
		\tribe(),
		map( [
			'events-aggregator.record-items'                => \Tribe__Events__Aggregator__Record__Items::class,
			'events-aggregator.processes.import-events'     => \Tribe__Events__Aggregator__Processes__Import_Events::class,
			'events-aggregator.queue-control'               => \Tribe__Events__Aggregator__Processes__Queue_Control::class,
			'events.integrations.freemius'                  => \Tribe__Events__Integrations__Freemius::class,
			'tec.integrations.wpml.meta'                    => \Tribe__Events__Integrations__WPML__Meta::class,
			'events-aggregator.rest-api.v1.endpoints.batch' => \Tribe__Events__Aggregator__REST__V1__Endpoints__Batch::class,
			'events-aggregator.rest-api.v1.endpoints.state' => \Tribe__Events__Aggregator__REST__V1__Endpoints__State::class,
			'tec.main'                                      => \Tribe__Events__Main::class,
			'tec.i18n'                                      => \Tribe\Events\I18n::class,
			'tec.cost-utils'                                => \Tribe__Events__Cost_Utils::class,
			'tec.front-page-view'                           => \Tribe__Events__Front_Page_View::class,
			'tec.admin.event-meta-box'                      => \Tribe__Events__Admin__Event_Meta_Box::class,
			'tec.featured_events'                           => \Tribe__Events__Featured_Events::class,
			'tec.featured_events.query_helper'              => \Tribe__Events__Featured_Events__Query_Helper::class,
			'tec.featured_events.permalinks_helper'         => \Tribe__Events__Featured_Events__Permalinks_Helpe::class,
			'events-aggregator.main'                        => \Tribe__Events__Aggregator::class,
			'events-aggregator.service'                     => \Tribe__Events__Aggregator__Service::class,
			'events-aggregator.settings'                    => \Tribe__Events__Aggregator__Settings::class,
			'events-aggregator.records'                     => \Tribe__Events__Aggregator__Records::class,
			'tec.shortcodes.event-details'                  => \Tribe__Events__Shortcode__Event_Details::class,
			'tec.ignored-events'                            => \Tribe__Events__Ignored_Events::class,
			'tec.assets'                                    => \Tribe__Events__Assets::class,
			'tec.bar'                                       => \Tribe__Events__Bar::class,
			'tec.iCal'                                      => \Tribe__Events__iCal::class,
			'tec.rest-v1.main'                              => \Tribe__Events__REST__V1__Main::class,
			'tec.integrations.twenty-seventeen'             => \Tribe__Events__Integrations__Twenty_Seventeen::class,
			'tec.linked-posts'                              => \Tribe__Events__Linked_Posts::class,
			'tec.linked-posts.venue'                        => \Tribe__Events__Venue::class,
			'tec.linked-posts.organizer'                    => \Tribe__Events__Organizer::class,
			'tec.adjacent-events'                           => \Tribe__Events__Adjacent_Events::class,
			'tec.event-cleaner'                             => \Tribe__Events__Event_Cleaner::class,
			'tec.gutenberg'                                 => \Tribe__Events__Gutenberg::class,
			'tec.admin.notice.timezones'                    => \Tribe__Events__Admin__Notice__Timezones::class,
			'tec.admin.notice.marketing'                    => \Tribe__Events__Admin__Notice__Marketing::class,
			'tec.privacy'                                   => \Tribe__Events__Privacy::class,
			'events.rewrite'                                => \Tribe__Events__Rewrite::class,
			'tec.customizer.general-theme'                  => \Tribe__Events__Customizer__General_Theme::class,
			'tec.customizer.global-elements'                => \Tribe__Events__Customizer__Global_Elements::class,
			'tec.customizer.day-list-view'                  => \Tribe__Events__Customizer__Day_List_View::class,
			'tec.customizer.month-week-view'                => \Tribe__Events__Customizer__Month_Week_View::class,
			'tec.customizer.single-event'                   => \Tribe__Events__Customizer__Single_Event::class,
			'tec.customizer.widget'                         => \Tribe__Events__Customizer__Widget::class,
		] )
	);
}